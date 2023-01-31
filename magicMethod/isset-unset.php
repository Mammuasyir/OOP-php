<?php

//__isset() method is called when a property is checked for existence
//__unset() berfungsi untuk menghapus property

class MagicMethod1
{
	private $name;

    private $data = [
        'name' => 'Rizky Blog',
        'email' => "rizkyff@gmail.com"
    ];

    public function __unset($index)
	{
		if (isset($this->data[$index])) { 
			unset($this->data[$index]);
		}
	}

}

$magic = new MagicMethod1(); 
var_dump(isset($magic->name));

unset($magic->email);
var_dump($magic);