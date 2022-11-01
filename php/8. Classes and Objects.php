<?php

/**
 * 
 * 1. The Basics
 * 2. Properties
 * 3. Class Constants
 * 4. Autoloading Classes
 * 5. Constructors and Destructors
 * 6. Visibility
 * 7. Object Inheritance
 * 8. Scope Resolution Operator (::)
 * 9. Static Keyword
 * 10. Class Abstraction
 * 11. Object Interfaces
 * 12. Traits
 * 13. Anonymous classes
 * 14. Overloading
 * 15. Object Iteration
 * 16. Magic Methods
 * 17. Final Keyword
 * 18. Object Cloning
 * 19. Comparing Objects
 * 20. Late Static Bindings
 * 21. Objects and references
 * 22. Object Serialization
 * 23. Covariance and Contravariance
 * 
 */

/**
 * The Basics
 * 
 * Basic class definitions begin with the keyword class, followed by a class name, 
 * followed by a pair of curly braces which enclose the definitions of the properties and methods 
 * belonging to the class.
 */


/**
 * Properties
 * 
 * Class member variables are called properties. They may be referred to using other terms such as 
 * fields, but for the purposes of this reference properties will be used. They are defined by using 
 * at least one modifier (such as Visibility, Static Keyword, or, as of PHP 8.1.0, readonly), 
 * optionally (except for readonly properties), as of PHP 7.4, followed by a type declaration, 
 * followed by a normal variable declaration. This declaration may include an initialization, but 
 * this initialization must be a constant value.
 * 
 */


/**
 * Class Constants 
 * 
 * It is possible to define constants on a per-class basis remaining the same and unchangeable. 
 * The default visibility of class constants is public.
 */


/**
 * Autoloading Classes 
 * 
 * Many developers writing object-oriented applications create one PHP source file per class definition.
 * One of the biggest annoyances is having to write a long list of needed includes at the beginning of 
 * each script (one for each class).
 * 
 * The spl_autoload_register() function registers any number of autoloaders, enabling for classes and 
 * interfaces to be automatically loaded if they are currently not defined. By registering autoloaders, 
 * PHP is given a last chance to load the class or interface before it fails with an error.
 * 
 * Any class-like construct may be autoloaded the same way. That includes classes, interfaces, traits, 
 * and enumerations.
 * 
 */


/**
 * Constructors and Destructors
 * 
 * constructor syntax __construct(mixed ...$values = ""): void
 * destructor syntax __destruct(): void
 * 
 */


/**
 * Visibility
 * 
 * Property Visibility 
 * 
 * Class properties may be defined as public, private, or protected. Properties declared without any 
 * explicit visibility keyword are defined as public.
 * 
 * 
 * Method Visibility
 * 
 * Class methods may be defined as public, private, or protected. Methods declared without any 
 * explicit visibility keyword are defined as public.
 */

/**
 * Object Inheritance
 * Inheritance is a well-established programming principle, and PHP makes use of this principle in 
 * its object model. This principle will affect the way many classes and objects relate to one another.
 */


/**
 * Scope Resolution Operator (::)
 * 
 * The Scope Resolution Operator (also called Paamayim Nekudotayim) or in simpler terms, the double 
 * colon, is a token that allows access to static, constant, and overridden properties or methods of 
 * a class.
 */


/**
 * 
 * Static Keyword
 * 
 * Declaring class properties or methods as static makes them accessible without needing an 
 * instantiation of the class. These can also be accessed statically within an instantiated class object.
 * 
 * Static methods
 * Because static methods are callable without an instance of the object created, the pseudo-variable 
 * $this is not available inside methods declared as static.
 * 
 * Static propertie
 * 
 * Static properties are accessed using the Scope Resolution Operator (::) and cannot be accessed 
 * through the object operator (->).
 */


/**
 * Class Abstraction
 * 
 * PHP has abstract classes and methods. Classes defined as abstract cannot be instantiated, and 
 * any class that contains at least one abstract method must also be abstract. Methods defined as 
 * abstract simply declare the method's signature; they cannot define the implementation.
 * 
 * When inheriting from an abstract class, all methods marked abstract in the parent's class 
 * declaration must be defined by the child class, and follow the usual inheritance and signature 
 * compatibility rules.
 */



/**
 * Object Interfaces
 * 
 * Object interfaces allow you to create code which specifies which methods a class must implement, 
 * without having to define how these methods are implemented. Interfaces share a namespace with 
 * classes and traits, so they may not use the same name.
 * 
 * Interfaces are defined in the same way as a class, but with the interface keyword replacing the 
 * class keyword and without any of the methods having their contents defined.
 * 
 * All methods declared in an interface must be public; this is the nature of an interface.
 * 
 * 
 */

// Declare the interface 'Template'


// Implement the interface
// This will work

/**
 * Traits
 * 
 * PHP implements a way to reuse code called Traits
 * 
 * Traits are a mechanism for code reuse in single inheritance languages such as PHP. 
 * A Trait is intended to reduce some limitations of single inheritance by enabling a developer 
 * to reuse sets of methods freely in several independent classes living in different class hierarchies.
 * The semantics of the combination of Traits and classes is defined in a way which reduces complexity,
 * and avoids the typical problems associated with multiple inheritance and Mixins.
 * 
 */


/**
 * Anonymous classes
 * 
 * Anonymous classes are useful when simple, one-off objects need to be created.
 */


// Using an explicit class


// Using an anonymous class

/**
 * Overloading 
 * 
 * Overloading in PHP provides means to dynamically create properties and methods. 
 * These dynamic entities are processed via magic methods one can establish in a class for various 
 * action types.
 * 
 * The overloading methods are invoked when interacting with properties or methods that have not been 
 * declared or are not visible in the current scope. The rest of this section will use the terms 
 * inaccessible properties and inaccessible methods to refer to this combination of declaration and 
 * visibility.
 */

// public __set(string $name, mixed $value): void

// public __get(string $name): mixed

// public __isset(string $name): bool

// public __unset(string $name): void

// __set() is run when writing data to inaccessible (protected or private) or non-existing properties.

// __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.

// __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.

// __unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.;



/**
 * Object Iteration 
 * 
 * PHP provides a way for objects to be defined so it is possible to iterate through a list of items, 
 * with, for example a foreach statement. By default, all visible properties will be used for the iteration.
 */


/**
 * Magic Methods
 */

//  __sleep() and __wakeup()

// __serialize() and __unserialize() 

// __toString()


// __set_state()



// __debugInfo()

/**
 * Final Keyword
 * The final keyword prevents child classes from overriding a method or constant by prefixing the 
 * definition with final. If the class itself is being defined final then it cannot be extended.
 */

//   Final methods 

// Results in Fatal error: Cannot override final method BaseClass::moreTesting()

//   Final class 

// Results in Fatal error: Class ChildClass may not inherit from final class (BaseClass)

// final constants example as of PHP 8.1.0

// Fatal error: Bar::X cannot override final constant Foo::X


/**
 * Object Cloning
 * 
 * Creating a copy of an object with fully replicated properties is not always the wanted behavior. 
 * A good example of the need for copy constructors, is if you have an object which represents a GTK 
 * window and the object holds the resource of this GTK window, when you create a duplicate you might 
 * want to create a new window with the same properties and have the new object hold the resource of 
 * the new window. Another example is if your object holds a reference to another object which it uses 
 * and when you replicate the parent object you want to create a new instance of this other object so 
 * that the replica has its own separate copy
 *
 * An object copy is created by using the clone keyword (which calls the object's __clone() method if possible). 
 */


/**
 * Comparing Objects
 * 
 * When using the comparison operator (==), object variables are compared in a simple manner, 
 * namely: Two object instances are equal if they have the same attributes and values (values are 
 * compared with ==), and are instances of the same class.
 * 
 * When using the identity operator (===), object variables are identical if and only if they refer 
 * to the same instance of the same class.
 */


/**
 * Late Static Bindings
 * 
 * PHP implements a feature called late static bindings which can be used to reference the called 
 * class in a context of static inheritance.
 * 
 * Limitations of self:: 
 * Static references to the current class like self:: or __CLASS__ are resolved using the class in which the function belongs, as in where it was defined:
 */

//  Limitations of self::

/**
 * Late Static Bindings' usage
 * 
 * Late static bindings tries to solve that limitation by introducing a keyword that references the 
 * class that was initially called at runtime. Basically, a keyword that would allow referencing B 
 * from test() in the previous example. It was decided not to introduce a new keyword but rather use 
 * static that was already reserved.
 */


/**
 * 
 * Objects and references
 * 
 * One of the key-points of PHP OOP that is often mentioned is that "objects are passed by references by default". This is not completely true.
 */

