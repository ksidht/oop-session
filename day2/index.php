<?php 
class Task 
{
	public $name = 'Go to Store';
	protected $isCompleted = false ;
	
	public function __construct($name)
	{
		$this->name = $name;
	}


	public function complete()
	{
		$this->isCompleted = true;
	}

	public function completeStatus()
	{
		return $this->isCompleted;
	}
}

$tasks = [
	new Task('Go to Store'),
	new Task('Learn PHP'),
	new Task('Learn Laravel')
];

$tasks[0]->complete();

/*echo "<pre>";
var_dump($tasks);
echo "</pre>";*/


require 'index.view.php';
?>