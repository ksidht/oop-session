<!DOCTYPE html>
<html>
<head>
	<title>TO DO AAp</title>
</head>
<body>
	<ul>
		<?php foreach( $tasks as $task): ?>
			<?php if($task->completeStatus()): ?>	
			<li><strike><?= $task->name ?></strike></li>
		<?php else: ?>
			<li><?= $task->name ?></li>
		<?php endif; ?>
		<?php endforeach; ?>
	</ul>
</body>
</html>