

<?php if ($this->controller->getTask() == 'add') { ?>
	this form
<?php } else { ?>
	Newsroom:
	<br/><br/>
	<a href="<?=$this->url('/newsroom', 'add')?>">Add</a>
<?php } ?>






