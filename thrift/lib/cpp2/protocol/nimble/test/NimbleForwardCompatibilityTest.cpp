/*
 * Copyright (c) Facebook, Inc. and its affiliates.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

#include <folly/portability/GTest.h>

#include <thrift/lib/cpp2/protocol/NimbleProtocol.h>
#include <thrift/lib/cpp2/protocol/nimble/test/gen-cpp2/forward_compatibility_types.h>

using namespace apache::thrift::test;

namespace apache {
namespace thrift {
namespace detail {

Primitives defaultPrimitives() {
  Primitives result;
  result.f1 = 1;
  result.f2 = 2;
  result.f3 = 3;
  result.f4 = 4;
  result.f5 = "5";
  result.f6 = "6";
  result.f7 = "7";
  result.f8 = 8.0f;
  result.f9 = 9.0;
  return result;
}

NestedStructL2 defaultNestedStructL2() {
  NestedStructL2 result;
  result.f1 = "1";
  result.f2.f1 = 1;
  result.f2.f2 = 2;
  result.f2.f3.f1 = 1;
  result.f2.f3.f2 = 2;
  result.f3 = 3;
  return result;
}

template <typename Dst, typename Src>
Dst nimble_cast(Src& src) {
  NimbleProtocolWriter writer;
  src.write(&writer);
  auto buf = writer.finalize();
  buf->coalesce();

  NimbleProtocolReader reader;
  reader.setInput(folly::io::Cursor{buf.get()});
  Dst dst;
  dst.read(&reader);
  return dst;
}

TEST(NimbleForwardCompatibilityTest, PrimitiveSimpleSkip) {
  auto primitives = defaultPrimitives();
  auto casted = nimble_cast<PrimitivesSimpleSkip>(primitives);
  EXPECT_EQ(1, casted.f1);
  EXPECT_EQ(2, casted.f2);
  // Altered
  EXPECT_EQ(0, casted.f3);
  EXPECT_EQ(4, casted.f4);
  // Altered
  EXPECT_EQ("", casted.f5);
  EXPECT_EQ("6", casted.f6);
}

TEST(NimbleForwardCompatibilityTest, PrimitiveConsecutiveMissing) {
  auto primitives = defaultPrimitives();
  auto casted = nimble_cast<PrimitivesConsecutiveMissing>(primitives);

  EXPECT_EQ(1, casted.f1);
  EXPECT_EQ("6", casted.f6);
}

TEST(NimbleForwardCompatibilityTest, PrimitivesTypesChanged) {
  auto primitives = defaultPrimitives();
  auto casted = nimble_cast<PrimitivesTypesChanged>(primitives);

  // Altered
  EXPECT_EQ(0, casted.f1);
  EXPECT_EQ(2, casted.f2);
  // Altered
  EXPECT_EQ(0, casted.f3);
  EXPECT_EQ(4, casted.f4);
  // Altered
  EXPECT_EQ(0.0, casted.f5);
  // Altered
  EXPECT_TRUE(casted.f6.empty());
  EXPECT_EQ("7", casted.f7);
  EXPECT_EQ(8.0f, casted.f8);
  // Altered
  EXPECT_EQ(0.0, casted.f9);
}

TEST(NimbleForwardCompatibilityTest, PrimitivesTypesReordered) {
  auto primitives = defaultPrimitives();
  auto casted = nimble_cast<PrimitivesTypesReordered>(primitives);

  EXPECT_EQ(primitives.f1, casted.f1);
  EXPECT_EQ(primitives.f2, casted.f2);
  EXPECT_EQ(primitives.f3, casted.f3);
  EXPECT_EQ(primitives.f4, casted.f4);
  EXPECT_EQ(primitives.f5, casted.f5);
  EXPECT_EQ(primitives.f6, casted.f6);
  EXPECT_EQ(primitives.f7, casted.f7);
  EXPECT_EQ(primitives.f8, casted.f8);
  EXPECT_EQ(primitives.f9, casted.f9);
}

TEST(NimbleForwardCompatibilityTest, NestedStruct) {
  auto nested = defaultNestedStructL2();
  auto casted = nimble_cast<NestedStructMissingSubstruct>(nested);
  EXPECT_EQ("1", casted.f1);
  EXPECT_EQ(3, casted.f3);
}

TEST(NimbleForwardCompatibilityTest, NestedStructTypeChanged) {
  auto nested = defaultNestedStructL2();
  auto casted = nimble_cast<NestedStructTypeChanged>(nested);
  EXPECT_EQ("1", casted.f1);
  EXPECT_EQ(3, casted.f3);
}

} // namespace detail
} // namespace thrift
} // namespace apache
