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

#pragma once

#include <folly/io/async/SSLContext.h>

#include <thrift/lib/cpp/async/TAsyncSocketFactory.h>

namespace apache {
namespace thrift {
namespace async {

/**
 * Factory class for producing TAsyncSSLSocket instances.
 */
class TAsyncSSLSocketFactory : public TAsyncSocketFactory {
 public:
  explicit TAsyncSSLSocketFactory(folly::EventBase* eventBase);
  ~TAsyncSSLSocketFactory() override;

  /**
   * Set the SSLContext to use when constructing sockets.
   */
  void setSSLContext(folly::SSLContextPtr& context);

  /**
   * Set whether or not we're constructing client or server sockets.
   *
   * By default, client sockets are created.
   */
  void setServerMode(bool serverMode);

  // TAsyncSocketFactory
  TAsyncSocket::UniquePtr make() const override;
  TAsyncSocket::UniquePtr make(int fd) const override;

 protected:
  folly::EventBase* eventBase_;
  folly::SSLContextPtr context_;
  bool serverMode_;
};

} // namespace async
} // namespace thrift
} // namespace apache
