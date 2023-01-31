<?php

class Variadic
{
	public static function foo(int $number)
	{
		var_dump(func_get_args());
	}
}

Variadic::foo(7, 'ini', 'tetap', 'masuk');

//contoh lain

function sum(...$args) {
    return $args[0] + $args[2];
}

echo sum(3,4,5,);

?>