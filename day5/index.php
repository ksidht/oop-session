<?php 
class Test
{
	public static $count = 0;

	public function __construct()
	{
		self::$count++;
	}

	public static function TotalCount()
	{
		return self::$count;
	}
}

$name = new Test;
$name = new Test;
$name = new Test;
$name = new Test;
$name = new Test;
$name = new Test;



echo "<pre>";
var_dump(Test::TotalCount());
echo "</pre>";



?>