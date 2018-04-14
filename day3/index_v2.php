<?php 
#users
#posts
#coments
class Database
{
	public $table_name;

	public function __construct($table){
		$this->table_name = $table;
	}

	public function save()
	{
		echo "<br/>save ".$this->table_name;
	}

	public function fetch() 
	{
		echo "<br/>fetch ".$this->table_name;
	}

	public function update()
	{
		echo "<br/>update ".$this->table_name;

	}

	public function delete()
	{
		echo "<br/>delete ".$this->table_name;
	}
}

class User extends Database
{
	/*public function show()
	{
		var_dump(get_class_methods($this));
	}*/
}
class Post extends Database{
	
}
class Comment extends Database{

}

$user = new User('users');

$user->save();
$user->fetch();
$user->update();
$user->delete();

$post = new Post('post');

$post->save();
$post->fetch();
$post->update();
$post->delete();

$comment = new Comment('comment');

$comment->save();
$comment->fetch();
$comment->update();
$comment->delete();

/*echo "<pre>";
$user->show();
echo "</pre>";
*/