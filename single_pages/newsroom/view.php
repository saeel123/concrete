<?php if ($this->controller->getTask() == 'add') { ?>
<h3>Add</h3>
<form method="post" action="<?=$this->action('save')?>">
	<input type="text" name="name" value="" />
	<input type="submit" value="submit" />
<form>	

<?php } else { ?>
	Newsroom:
	<br/><br/>
	<a href="<?=$this->url('/newsroom', 'add')?>">Add</a>
<?php } ?>