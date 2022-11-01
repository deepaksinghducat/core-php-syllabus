<?php

/**
 * 
 * 1. Enumerations overview
 * 2. Basic enumerations
 * 3. Backed enumerations
 * 4. Enumeration methods
 * 5. Enumeration static methods
 * 6. Enumeration constants
 * 7. Traits
 */

/**
 * Enumerations overview
 * Enumerations, or "Enums" allow a developer to define a custom type that is limited to one of a 
 * discrete number of possible values. That can be especially helpful when defining a domain model, as it enables "making invalid states unrepresentable."
 */

/**
 * Basic enumerations
 * 
 * Enums are similar to classes, and share the same namespaces as classes, interfaces, and traits. 
 * They are also autoloadable the same way. An Enum defines a new type, which has a fixed, limited 
 * number of possible legal values.
 */


/**
 * Backed enumerations
 * 
 * By default, Enumerated Cases have no scalar equivalent. They are simply singleton objects. 
 * However, there are ample cases where an Enumerated Case needs to be able to round-trip to a 
 * database or similar datastore, so having a built-in scalar (and thus trivially serializable) 
 * equivalent defined intrinsically is useful.
 */


/**
 * Enumeration methods
 * 
 * Enums (both Pure Enums and Backed Enums) may contain methods, and may implement interfaces. 
 * If an Enum implements an interface, then any type check for that interface will also accept all 
 * cases of that Enum.
 */


/**
 * Enumeration static methods
 * 
 * Enumerations may also have static methods. The use for static methods on the enumeration 
 * itself is primarily for alternative constructors.
 * 
 */

/**
 * Enumeration constants 
 * 
 * Enumerations may include constants, which may be public, private, or protected, 
 * although in practice private and protected are equivalent as inheritance is not allowed.
 */

/**
 * Traits 
 * 
 * Enumerations may leverage traits, which will behave the same as on classes. 
 * The caveat is that traits used in an enum must not contain properties. They may only include 
 * methods and static methods. A trait with properties will result in a fatal error.
 */
