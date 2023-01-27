<?php

class Faktorial
{
	static function nonRecursive(int $number)
	{
		$result = 1;
		for ($i = 1; $i <= $number; $i++) {
			$result *= $i;
		}
		return $result;
	}

    static function recursive(int $number) {
        if ($number < 2) {
            return $number;
        } return $number * self::recursive($number - 1);
    }
}

echo Faktorial::nonRecursive(5); 
echo PHP_EOL;

echo Faktorial::recursive(4);

?>