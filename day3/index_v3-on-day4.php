<?php 
#users
#posts
#coments
class Database
{
	protected $table_name;

    /*PUBLIC function __construct($table)
    {
    	$this->table_name=$table;
    }*/

	public function save()
	{
		echo "<br/>save ".$this->table_name;
	}

	public function fetch() 
	{
		echo "select * from ".$this->table_name;
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

class User extends Database, Database2, Database3
{

	public $table_name = 'user';

}

class Post extends Database
{
	
	public function __construct()
	{
		$this->table_name = 'post';
	}
}

/*class Comment extends Database{

public function __construct()
{
parent::__construct("comment");
}
}*/

$user = new User();

$user->save();
$user->fetch();
$user->update();
$user->delete();

$post = new Post();

$post->save();
$post->fetch();
$post->update();
$post->delete();

/*$comment = new Comment();

$comment->save();
$comment->fetch();
$comment->update();
$comment->delete();*/

/*echo "<pre>";
$user->show();
echo "</pre>";
*/