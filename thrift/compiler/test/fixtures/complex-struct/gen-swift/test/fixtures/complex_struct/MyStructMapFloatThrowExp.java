/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

package test.fixtures.complex_struct;

import com.facebook.swift.codec.*;
import com.facebook.swift.codec.ThriftField.Requiredness;
import com.facebook.swift.codec.ThriftField.Recursiveness;
import java.util.*;

import static com.google.common.base.MoreObjects.toStringHelper;

@SwiftGenerated
@ThriftStruct(value="MyStructMapFloatThrowExp", builder=MyStructMapFloatThrowExp.Builder.class)
public final class MyStructMapFloatThrowExp {
    @ThriftConstructor
    public MyStructMapFloatThrowExp(
        @ThriftField(value=1, name="myLongField", requiredness=Requiredness.NONE) final long myLongField,
        @ThriftField(value=2, name="mapListOfFloats", requiredness=Requiredness.NONE) final Map<Integer, List<List<Float>>> mapListOfFloats
    ) {
        this.myLongField = myLongField;
        this.mapListOfFloats = mapListOfFloats;
    }
    
    @ThriftConstructor
    protected MyStructMapFloatThrowExp() {
      this.myLongField = 0L;
      this.mapListOfFloats = null;
    }
    
    public static class Builder {
        private long myLongField;
        @ThriftField(value=1, name="myLongField", requiredness=Requiredness.NONE)
        public Builder setMyLongField(long myLongField) {
            this.myLongField = myLongField;
            return this;
        }
        private Map<Integer, List<List<Float>>> mapListOfFloats;
        @ThriftField(value=2, name="mapListOfFloats", requiredness=Requiredness.NONE)
        public Builder setMapListOfFloats(Map<Integer, List<List<Float>>> mapListOfFloats) {
            this.mapListOfFloats = mapListOfFloats;
            return this;
        }
    
        public Builder() { }
        public Builder(MyStructMapFloatThrowExp other) {
            this.myLongField = other.myLongField;
            this.mapListOfFloats = other.mapListOfFloats;
        }
    
        @ThriftConstructor
        public MyStructMapFloatThrowExp build() {
            return new MyStructMapFloatThrowExp (
                this.myLongField,
                this.mapListOfFloats
            );
        }
    }
    
    private final long myLongField;
    private final Map<Integer, List<List<Float>>> mapListOfFloats;

    
    @ThriftField(value=1, name="myLongField", requiredness=Requiredness.NONE)
    public long getMyLongField() { return myLongField; }
        
    @ThriftField(value=2, name="mapListOfFloats", requiredness=Requiredness.NONE)
    public Map<Integer, List<List<Float>>> getMapListOfFloats() { return mapListOfFloats; }
    
    @Override
    public String toString() {
        return toStringHelper(this)
            .add("myLongField", myLongField)
            .add("mapListOfFloats", mapListOfFloats)
            .toString();
    }
    
    @Override
    public boolean equals(Object o) {
        if (this == o) {
            return true;
        }
        if (o == null || getClass() != o.getClass()) {
            return false;
        }
    
        MyStructMapFloatThrowExp other = (MyStructMapFloatThrowExp)o;
    
        return
            Objects.equals(myLongField, other.myLongField) &&
            Objects.equals(mapListOfFloats, other.mapListOfFloats) &&
            true;
    }
    
    @Override
    public int hashCode() {
        return Arrays.deepHashCode(new Object[] {
            myLongField,
            mapListOfFloats
        });
    }
    
}
