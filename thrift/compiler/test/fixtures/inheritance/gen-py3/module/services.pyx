#
# Autogenerated by Thrift
#
# DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
#  @generated
#

from libcpp.memory cimport shared_ptr, make_shared, unique_ptr, make_unique
from libcpp.string cimport string
from libcpp cimport bool as cbool
from cpython cimport bool as pbool
from libc.stdint cimport int8_t, int16_t, int32_t, int64_t
from libcpp.vector cimport vector
from libcpp.set cimport set as cset
from libcpp.map cimport map as cmap
from cython.operator cimport dereference as deref
from cpython.ref cimport PyObject
from thrift.py3.exceptions cimport (
    cTApplicationException,
    ApplicationError as __ApplicationError,
    cTApplicationExceptionType__UNKNOWN)
from thrift.py3.server cimport ServiceInterface, RequestContext, Cpp2RequestContext
from thrift.py3.server import RequestContext, pass_context
from folly cimport (
  cFollyPromise,
  cFollyUnit,
  c_unit
)

cimport folly.futures
from folly.executor cimport get_executor

cimport module.types as _module_types
import module.types as _module_types

import asyncio
import functools
import sys
import traceback

from module.services_wrapper cimport cMyRootInterface
from module.services_wrapper cimport cMyNodeInterface
from module.services_wrapper cimport cMyLeafInterface


cdef extern from "<utility>" namespace "std":
    cdef cFollyPromise[unique_ptr[string]] move(cFollyPromise[unique_ptr[string]])
    cdef cFollyPromise[cFollyUnit] move(
        cFollyPromise[cFollyUnit])

cdef class Promise_void:
    cdef cFollyPromise[cFollyUnit] cPromise

    @staticmethod
    cdef create(cFollyPromise[cFollyUnit] cPromise):
        inst = <Promise_void>Promise_void.__new__(Promise_void)
        inst.cPromise = move(cPromise)
        return inst

cdef class MyRootInterface(
    ServiceInterface
):
    def __cinit__(self):
        self.interface_wrapper = cMyRootInterface(
            <PyObject *> self,
            get_executor()
        )

    @staticmethod
    def pass_context_do_root(fn):
        return pass_context(fn)

    async def do_root(
            self):
        raise NotImplementedError("async def do_root is not implemented")
cdef class MyNodeInterface(
MyRootInterface
):
    def __cinit__(self):
        self.interface_wrapper = cMyNodeInterface(
            <PyObject *> self,
            get_executor()
        )

    @staticmethod
    def pass_context_do_mid(fn):
        return pass_context(fn)

    async def do_mid(
            self):
        raise NotImplementedError("async def do_mid is not implemented")
cdef class MyLeafInterface(
MyNodeInterface
):
    def __cinit__(self):
        self.interface_wrapper = cMyLeafInterface(
            <PyObject *> self,
            get_executor()
        )

    @staticmethod
    def pass_context_do_leaf(fn):
        return pass_context(fn)

    async def do_leaf(
            self):
        raise NotImplementedError("async def do_leaf is not implemented")


cdef api void call_cy_MyRoot_do_root(
    object self,
    Cpp2RequestContext* ctx,
    cFollyPromise[cFollyUnit] cPromise
):
    cdef MyRootInterface iface
    iface = self
    __promise = Promise_void.create(move(cPromise))
    __context = None
    if iface._pass_context_do_root:
        __context = RequestContext.create(ctx)
    asyncio.get_event_loop().create_task(
        MyRoot_do_root_coro(
            self,
            __context,
            __promise
        )
    )

async def MyRoot_do_root_coro(
    object self,
    object ctx,
    Promise_void promise
):
    try:
        if ctx is not None:
            result = await self.do_root(ctx,)
        else:
            result = await self.do_root()
    except __ApplicationError as ex:
        # If the handler raised an ApplicationError convert it to a C++ one
        promise.cPromise.setException(cTApplicationException(
            ex.type.value, ex.message.encode('UTF-8')
        ))
    except Exception as ex:
        print(
            "Unexpected error in service handler do_root:",
            file=sys.stderr)
        traceback.print_exc()
        promise.cPromise.setException(cTApplicationException(
            cTApplicationExceptionType__UNKNOWN, repr(ex).encode('UTF-8')
        ))
    else:
        promise.cPromise.setValue(c_unit)

cdef api void call_cy_MyNode_do_mid(
    object self,
    Cpp2RequestContext* ctx,
    cFollyPromise[cFollyUnit] cPromise
):
    cdef MyNodeInterface iface
    iface = self
    __promise = Promise_void.create(move(cPromise))
    __context = None
    if iface._pass_context_do_mid:
        __context = RequestContext.create(ctx)
    asyncio.get_event_loop().create_task(
        MyNode_do_mid_coro(
            self,
            __context,
            __promise
        )
    )

async def MyNode_do_mid_coro(
    object self,
    object ctx,
    Promise_void promise
):
    try:
        if ctx is not None:
            result = await self.do_mid(ctx,)
        else:
            result = await self.do_mid()
    except __ApplicationError as ex:
        # If the handler raised an ApplicationError convert it to a C++ one
        promise.cPromise.setException(cTApplicationException(
            ex.type.value, ex.message.encode('UTF-8')
        ))
    except Exception as ex:
        print(
            "Unexpected error in service handler do_mid:",
            file=sys.stderr)
        traceback.print_exc()
        promise.cPromise.setException(cTApplicationException(
            cTApplicationExceptionType__UNKNOWN, repr(ex).encode('UTF-8')
        ))
    else:
        promise.cPromise.setValue(c_unit)

cdef api void call_cy_MyLeaf_do_leaf(
    object self,
    Cpp2RequestContext* ctx,
    cFollyPromise[cFollyUnit] cPromise
):
    cdef MyLeafInterface iface
    iface = self
    __promise = Promise_void.create(move(cPromise))
    __context = None
    if iface._pass_context_do_leaf:
        __context = RequestContext.create(ctx)
    asyncio.get_event_loop().create_task(
        MyLeaf_do_leaf_coro(
            self,
            __context,
            __promise
        )
    )

async def MyLeaf_do_leaf_coro(
    object self,
    object ctx,
    Promise_void promise
):
    try:
        if ctx is not None:
            result = await self.do_leaf(ctx,)
        else:
            result = await self.do_leaf()
    except __ApplicationError as ex:
        # If the handler raised an ApplicationError convert it to a C++ one
        promise.cPromise.setException(cTApplicationException(
            ex.type.value, ex.message.encode('UTF-8')
        ))
    except Exception as ex:
        print(
            "Unexpected error in service handler do_leaf:",
            file=sys.stderr)
        traceback.print_exc()
        promise.cPromise.setException(cTApplicationException(
            cTApplicationExceptionType__UNKNOWN, repr(ex).encode('UTF-8')
        ))
    else:
        promise.cPromise.setValue(c_unit)

