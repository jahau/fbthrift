/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
#include "thrift/compiler/test/fixtures/basic-enum/gen-cpp2/module_metadata.h"

namespace apache {
namespace thrift {
namespace detail {
namespace md {
using ThriftMetadata = ::apache::thrift::metadata::ThriftMetadata;

void EnumMetadata<::test::fixtures::enumstrict::EmptyEnum>::gen(ThriftMetadata& metadata) {
  auto res = metadata.enums.emplace("module.EmptyEnum", ::apache::thrift::metadata::ThriftEnum{});
  if (!res.second) {
    return;
  }
  ::apache::thrift::metadata::ThriftEnum& enum_metadata = res.first->second;
  enum_metadata.name = "module.EmptyEnum";
  for (const auto& p : ::test::fixtures::enumstrict::_EmptyEnum_VALUES_TO_NAMES) {
    enum_metadata.elements.emplace(static_cast<int32_t>(p.first), p.second) ;
  }
}
void EnumMetadata<::test::fixtures::enumstrict::MyEnum>::gen(ThriftMetadata& metadata) {
  auto res = metadata.enums.emplace("module.MyEnum", ::apache::thrift::metadata::ThriftEnum{});
  if (!res.second) {
    return;
  }
  ::apache::thrift::metadata::ThriftEnum& enum_metadata = res.first->second;
  enum_metadata.name = "module.MyEnum";
  for (const auto& p : ::test::fixtures::enumstrict::_MyEnum_VALUES_TO_NAMES) {
    enum_metadata.elements.emplace(static_cast<int32_t>(p.first), p.second) ;
  }
}
void EnumMetadata<::test::fixtures::enumstrict::MyBigEnum>::gen(ThriftMetadata& metadata) {
  auto res = metadata.enums.emplace("module.MyBigEnum", ::apache::thrift::metadata::ThriftEnum{});
  if (!res.second) {
    return;
  }
  ::apache::thrift::metadata::ThriftEnum& enum_metadata = res.first->second;
  enum_metadata.name = "module.MyBigEnum";
  for (const auto& p : ::test::fixtures::enumstrict::_MyBigEnum_VALUES_TO_NAMES) {
    enum_metadata.elements.emplace(static_cast<int32_t>(p.first), p.second) ;
  }
}

} // namespace md
} // namespace detail
} // namespace thrift
} // namespace apache
