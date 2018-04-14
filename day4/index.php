<?php 
#users
#posts
#coments
class Database
{
	protected $table_name;

    /*PUBLIC function __construct()
    {
    	echo "parrent ";
    	// $this->table_name=$table;
    }*/

	public function save()
	{
		echo "<br/>save ".$this->table_name;
	}

	public function fetch() 
	{
		echo "select * from";
	}

	public function update()
	{
		echo "<br/>update ".$this->table_name;

	}

	public function delete()
	{
		echo "<br/>delete ".$this->table_name;
	}

	public function fetchM()
	{
		echo "this from parent class";
	}	
}

trait MangoDB
{
	public function fetchM()
	{
		echo "this from trait";
	}
}

trait OrangeDB
{
	private function fetchM()
	{
		echo "this from orange";
	}
}

class User extends Database
{
	use MangoDB, OrangeDB{
		MangoDB::fetchM insteadof OrangeDB;
		OrangeDB::fetchM as public fetchO;
	}

	public $table_name = 'user';


    /*PUBLIC function __construct($table)
    {
    	echo "child";
    }*/

	public function getAllMethods()
	{
		return var_dump(get_class_methods($this));
	}

	/*public function fetch($sd)
	{
		// $this->fetch();

		echo "users";
	}*/
}

$user = new User();

echo "<pre>";
$user->getAllMethods();
echo "</pre>";

echo "<pre>";
$user->fetch();
echo "<br/>";
$user->fetchO();
$user->fetchM();
echo "</pre>";
