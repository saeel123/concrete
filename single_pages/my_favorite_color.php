<?php if (isset($message)) { ?>
<br/><?=$message?><br/>
<br/>
<br/>
<?php } ?>

Choose color
<br/>
<br/>
<form method="post" action="<?=$this->action('update_color')?>">
	<?=$form->text('color', $favoriteColor)?>
	<?=$form->submit('submit', 'Save')?>
	<!-- <input type="text" name="color" value="<?=$favoriteColor?>"> -->
	<!-- <input type="submit" value="save"> -->
</form>