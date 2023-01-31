<?php

class MagicMethod
{
	private $name;

    //__set() method is called when a property is set to a value
	// public function __set($property, $value)
	// {
	// 	if ('name' === $property) {
	// 		$this->name = $value;
	// 	} else {
	// 		throw new ParseError(sprintf('Undefined property
	// 			%s in class %s', $property,__CLASS__));
	// 	}
	// }

    //__get() method is called when a property is read

        public function __construct($name)
        {
            $this->name = $name;
        }

    public function __get($property) {
        if ('name' === $property) {
            return $this->name;
        } else {
            throw new ParseError(sprintf('Undefined property
                %s in class %s', $property,__CLASS__));
        }
    }
}

$magic = new MagicMethod("Rizky Blog");
echo $magic->name;


?>