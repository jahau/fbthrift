<?hh // strict
/**
 * Autogenerated by Thrift
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */

/**
 * Original thrift enum:-
 * has_bitwise_ops
 */
enum has_bitwise_ops : int {
  none = 0;
  zero = 1;
  one = 2;
  two = 4;
  three = 8;
}
type has_bitwise_opsType = has_bitwise_ops;

/**
 * Original thrift enum:-
 * is_unscoped
 */
enum is_unscoped : int {
  hello = 0;
  world = 1;
}
type is_unscopedType = is_unscoped;

/**
 * Original thrift enum:-
 * MyForwardRefEnum
 */
enum MyForwardRefEnum : int {
  ZERO = 0;
  NONZERO = 12;
}
type MyForwardRefEnumType = MyForwardRefEnum;

/**
 * Original thrift struct:-
 * decorated_struct
 */
class decorated_struct implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'field',
      'type' => \TType::STRING,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'field' => 1,
  };
  const int STRUCTURAL_ID = 6158382972310209096;
  /**
   * Original thrift field:-
   * 1: string field
   */
  public string $field;

  public function __construct(?string $field = null  ) {
    if ($field === null) {
      $this->field = '';
    } else {
      $this->field = $field;
    }
  }

  public function getName(): string {
    return 'decorated_struct';
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'field') !== null) {
      $this->field = $parsed['field'];
    }    
  }

}

/**
 * Original thrift struct:-
 * ContainerStruct
 */
class ContainerStruct implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    12 => dict[
      'var' => 'fieldA',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    2 => dict[
      'var' => 'fieldB',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    3 => dict[
      'var' => 'fieldC',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    4 => dict[
      'var' => 'fieldD',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    5 => dict[
      'var' => 'fieldE',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    6 => dict[
      'var' => 'fieldF',
      'type' => \TType::SET,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    7 => dict[
      'var' => 'fieldG',
      'type' => \TType::MAP,
      'ktype' => \TType::I32,
      'vtype' => \TType::STRING,
      'key' => dict[
        'type' => \TType::I32,
      ],
      'val' => dict[
        'type' => \TType::STRING,
        ],
        'format' => 'collection',
      ],
    8 => dict[
      'var' => 'fieldH',
      'type' => \TType::MAP,
      'ktype' => \TType::I32,
      'vtype' => \TType::STRING,
      'key' => dict[
        'type' => \TType::I32,
      ],
      'val' => dict[
        'type' => \TType::STRING,
        ],
        'format' => 'collection',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'fieldA' => 12,
    'fieldB' => 2,
    'fieldC' => 3,
    'fieldD' => 4,
    'fieldE' => 5,
    'fieldF' => 6,
    'fieldG' => 7,
    'fieldH' => 8,
  };
  const int STRUCTURAL_ID = 2901459969892394021;
  /**
   * Original thrift field:-
   * 12: list<i32> fieldA
   */
  public Vector<int> $fieldA;
  /**
   * Original thrift field:-
   * 2: list<i32> fieldB
   */
  public Vector<int> $fieldB;
  /**
   * Original thrift field:-
   * 3: list<i32> fieldC
   */
  public Vector<int> $fieldC;
  /**
   * Original thrift field:-
   * 4: list<i32> fieldD
   */
  public Vector<int> $fieldD;
  /**
   * Original thrift field:-
   * 5: list<i32> fieldE
   */
  public Vector<int> $fieldE;
  /**
   * Original thrift field:-
   * 6: set<i32> fieldF
   */
  public Set<int> $fieldF;
  /**
   * Original thrift field:-
   * 7: map<i32, string> fieldG
   */
  public Map<int, string> $fieldG;
  /**
   * Original thrift field:-
   * 8: map<i32, string> fieldH
   */
  public Map<int, string> $fieldH;

  public function __construct(?Vector<int> $fieldA = null, ?Vector<int> $fieldB = null, ?Vector<int> $fieldC = null, ?Vector<int> $fieldD = null, ?Vector<int> $fieldE = null, ?Set<int> $fieldF = null, ?Map<int, string> $fieldG = null, ?Map<int, string> $fieldH = null  ) {
    if ($fieldA === null) {
      $this->fieldA = Vector {};
    } else {
      $this->fieldA = $fieldA;
    }
    if ($fieldB === null) {
      $this->fieldB = Vector {};
    } else {
      $this->fieldB = $fieldB;
    }
    if ($fieldC === null) {
      $this->fieldC = Vector {};
    } else {
      $this->fieldC = $fieldC;
    }
    if ($fieldD === null) {
      $this->fieldD = Vector {};
    } else {
      $this->fieldD = $fieldD;
    }
    if ($fieldE === null) {
      $this->fieldE = Vector {};
    } else {
      $this->fieldE = $fieldE;
    }
    if ($fieldF === null) {
      $this->fieldF = Set {};
    } else {
      $this->fieldF = $fieldF;
    }
    if ($fieldG === null) {
      $this->fieldG = Map {};
    } else {
      $this->fieldG = $fieldG;
    }
    if ($fieldH === null) {
      $this->fieldH = Map {};
    } else {
      $this->fieldH = $fieldH;
    }
  }

  public function getName(): string {
    return 'ContainerStruct';
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'fieldA') !== null) {
      $_json3 = $parsed['fieldA'];
      $_container4 = Vector {};
      foreach($_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_tmp6 = (int)$_value2;
        if ($_tmp6 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem5 = (int)$_tmp6;
        }
        $_container4 []= $_elem5;
      }
      $this->fieldA = $_container4;
    }    
    if (idx($parsed, 'fieldB') !== null) {
      $_json10 = $parsed['fieldB'];
      $_container11 = Vector {};
      foreach($_json10 as $_key8 => $_value9) {
        $_elem12 = 0;
        $_tmp13 = (int)$_value9;
        if ($_tmp13 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem12 = (int)$_tmp13;
        }
        $_container11 []= $_elem12;
      }
      $this->fieldB = $_container11;
    }    
    if (idx($parsed, 'fieldC') !== null) {
      $_json17 = $parsed['fieldC'];
      $_container18 = Vector {};
      foreach($_json17 as $_key15 => $_value16) {
        $_elem19 = 0;
        $_tmp20 = (int)$_value16;
        if ($_tmp20 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem19 = (int)$_tmp20;
        }
        $_container18 []= $_elem19;
      }
      $this->fieldC = $_container18;
    }    
    if (idx($parsed, 'fieldD') !== null) {
      $_json24 = $parsed['fieldD'];
      $_container25 = Vector {};
      foreach($_json24 as $_key22 => $_value23) {
        $_elem26 = 0;
        $_tmp27 = (int)$_value23;
        if ($_tmp27 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem26 = (int)$_tmp27;
        }
        $_container25 []= $_elem26;
      }
      $this->fieldD = $_container25;
    }    
    if (idx($parsed, 'fieldE') !== null) {
      $_json31 = $parsed['fieldE'];
      $_container32 = Vector {};
      foreach($_json31 as $_key29 => $_value30) {
        $_elem33 = 0;
        $_tmp34 = (int)$_value30;
        if ($_tmp34 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem33 = (int)$_tmp34;
        }
        $_container32 []= $_elem33;
      }
      $this->fieldE = $_container32;
    }    
    if (idx($parsed, 'fieldF') !== null) {
      $_json38 = $parsed['fieldF'];
      $_container39 = Set {};
      foreach($_json38 as $_key36 => $_value37) {
        $_elem40 = 0;
        $_tmp41 = (int)$_value37;
        if ($_tmp41 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem40 = (int)$_tmp41;
        }
        $_container39->add($_elem40);
      }
      $this->fieldF = $_container39;
    }    
    if (idx($parsed, 'fieldG') !== null) {
      $_json45 = $parsed['fieldG'];
      $_container46 = Map {};
      foreach($_json45 as $_key43 => $_value44) {
        $_value47 = '';
        $_value47 = $_value44;
        $_container46[$_key43] = $_value47;
      }
      $this->fieldG = $_container46;
    }    
    if (idx($parsed, 'fieldH') !== null) {
      $_json51 = $parsed['fieldH'];
      $_container52 = Map {};
      foreach($_json51 as $_key49 => $_value50) {
        $_value53 = '';
        $_value53 = $_value50;
        $_container52[$_key49] = $_value53;
      }
      $this->fieldH = $_container52;
    }    
  }

}

/**
 * Original thrift struct:-
 * CppTypeStruct
 */
class CppTypeStruct implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'fieldA',
      'type' => \TType::LST,
      'etype' => \TType::I32,
      'elem' => dict[
        'type' => \TType::I32,
        ],
        'format' => 'collection',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'fieldA' => 1,
  };
  const int STRUCTURAL_ID = 9369458949141941;
  /**
   * Original thrift field:-
   * 1: list<i32> fieldA
   */
  public Vector<int> $fieldA;

  public function __construct(?Vector<int> $fieldA = null  ) {
    if ($fieldA === null) {
      $this->fieldA = Vector {};
    } else {
      $this->fieldA = $fieldA;
    }
  }

  public function getName(): string {
    return 'CppTypeStruct';
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'fieldA') !== null) {
      $_json3 = $parsed['fieldA'];
      $_container4 = Vector {};
      foreach($_json3 as $_key1 => $_value2) {
        $_elem5 = 0;
        $_tmp6 = (int)$_value2;
        if ($_tmp6 > 0x7fffffff) {
          throw new \TProtocolException("number exceeds limit in field");
        } else {
          $_elem5 = (int)$_tmp6;
        }
        $_container4 []= $_elem5;
      }
      $this->fieldA = $_container4;
    }    
  }

}

/**
 * Original thrift struct:-
 * VirtualStruct
 */
class VirtualStruct implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'MyIntField',
      'type' => \TType::I64,
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'MyIntField' => 1,
  };
  const int STRUCTURAL_ID = 7014352813131039231;
  /**
   * Original thrift field:-
   * 1: i64 MyIntField
   */
  public int $MyIntField;

  public function __construct(?int $MyIntField = null  ) {
    if ($MyIntField === null) {
      $this->MyIntField = 0;
    } else {
      $this->MyIntField = $MyIntField;
    }
  }

  public function getName(): string {
    return 'VirtualStruct';
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'MyIntField') !== null) {
      $this->MyIntField = $parsed['MyIntField'];
    }    
  }

}

/**
 * Original thrift struct:-
 * MyStructWithForwardRefEnum
 */
class MyStructWithForwardRefEnum implements \IThriftStruct {
  use \ThriftSerializationTrait;

  public static dict<int, dict<string, mixed>> $_TSPEC = dict[
    1 => dict[
      'var' => 'a',
      'type' => \TType::I32,
      'enum' => 'MyForwardRefEnum',
      ],
    2 => dict[
      'var' => 'b',
      'type' => \TType::I32,
      'enum' => 'MyForwardRefEnum',
      ],
    ];
  public static Map<string, int> $_TFIELDMAP = Map {
    'a' => 1,
    'b' => 2,
  };
  const int STRUCTURAL_ID = 6098225215594902198;
  /**
   * Original thrift field:-
   * 1: enum module.MyForwardRefEnum a
   */
  public ?MyForwardRefEnum $a;
  /**
   * Original thrift field:-
   * 2: enum module.MyForwardRefEnum b
   */
  public ?MyForwardRefEnum $b;

  public function __construct(?MyForwardRefEnum $a = null, ?MyForwardRefEnum $b = null  ) {
    if ($a === null) {
      $this->a = MyForwardRefEnum::NONZERO;
    } else {
      $this->a = $a;
    }
    if ($b === null) {
      $this->b = MyForwardRefEnum::NONZERO;
    } else {
      $this->b = $b;
    }
  }

  public function getName(): string {
    return 'MyStructWithForwardRefEnum';
  }

  public function readFromJson(string $jsonText): void {
    $parsed = json_decode($jsonText, true);

    if ($parsed === null || !is_array($parsed)) {
      throw new \TProtocolException("Cannot parse the given json string.");
    }

    if (idx($parsed, 'a') !== null) {
      $this->a = MyForwardRefEnum::coerce($parsed['a']);    }    
    if (idx($parsed, 'b') !== null) {
      $this->b = MyForwardRefEnum::coerce($parsed['b']);    }    
  }

}

