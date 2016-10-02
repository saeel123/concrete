<?php if (isset($message)) { ?>
<br/><?=$message?><br/>
<br/>
<br/>
<?php } ?>

Choose color
<br/>
<br/>
<form method="post" action="<?=$this->action('update_color')?>" enctype="multipart/form-data">
	<!-- Color:<?=$form->text('color', $favoriteColor)?> -->
	<?=$hcolor->output('color','Favorite Color', $favoriteColor)?>
	<br/><br/>
	File: <br/> <?=$form->file('my_image')?>
	<br/><br/>
	<?=$form->submit('submit', 'Save')?>
	<!-- <input type="text" name="color" value="<?=$favoriteColor?>"> -->
	<!-- <input type="submit" value="save"> -->
</form>