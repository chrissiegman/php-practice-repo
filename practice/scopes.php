<?php
// PUBLIC Scope: declare using 'public' or 'var'(deprecated) keywords (or when a variable is implicitly declared)
// Methods are public by default. Use public when outside code SHOULD access this member AND extending classes
// SHOULD inherit it.

// PROTECTED Scope: These properties and methods can be reference only the class's methods and those of subclasses
// Use when outside code SHOULD NOT access member, but extending classes SHOULD inherit.

// PRIVATE Scope: can only be referenced by members in the same class, not by subclasses.
// Use when outside code SHOULD NOT access member, extending classes SHOULD NOT inherit.

class Example {
    var $name   = "Michael"; // same as public, deprecated notation
    public $age = 23;        // public property, correct notation
    protected $usercount;    // protected property

    private function admin() // private method
    {
        // Admin code here
    }
}

?>
