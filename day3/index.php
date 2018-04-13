<?php 
#users
#posts
#coments
class Database
{
	public $table_name = "users";

	public function save()
	{
		echo "save";
	}

	public function fetch() 
	{
		echo "fetch";
	}

	public function update()
	{
		echo "update";

	}

	public function delete()
	{
		echo "delete";
	}
}

class User extends Database
{
	public function show()
	{
		var_dump(get_class_methods($this));
	}
}

$user = new User;

$user->table_name;

echo "<pre>";
$user->show();
echo "</pre>";
