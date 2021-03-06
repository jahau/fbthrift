/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.sink;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import java.util.*;

@SwiftGenerated
@ThriftStruct("SinkException1")
public final class SinkException1 extends java.lang.Exception {
    private static final long serialVersionUID = 1L;

    @ThriftConstructor
    public SinkException1(
        @ThriftField(value=1, name="reason", requiredness=Requiredness.NONE) final String reason
    ) {
        this.reason = reason;
    }
    
    @ThriftConstructor
    protected SinkException1() {
      this.reason = null;
    }
    
    public static class Builder {
        private String reason;
        @ThriftField(value=1, name="reason", requiredness=Requiredness.NONE)
        public Builder setReason(String reason) {
            this.reason = reason;
            return this;
        }
    
        public Builder() { }
        public Builder(SinkException1 other) {
            this.reason = other.reason;
        }
    
        @ThriftConstructor
        public SinkException1 build() {
            return new SinkException1 (
                this.reason
            );
        }
    }
    
    private final String reason;

    
    @ThriftField(value=1, name="reason", requiredness=Requiredness.NONE)
    public String getReason() { return reason; }
    }
