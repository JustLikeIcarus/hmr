<div data-role="header" data-position="inline">
	<a href="index.html" data-iconpos="notext" data-icon="arrow-l"></a>
	<h1><?php echo $header;?></h1>
	<a href="index.html" data-iconpos="notext" data-icon="arrow-r"></a>
</div><!-- /header -->

<div data-role="content">	
	<?php
	$form = new Appform();
	if(isset($errors)) {
	   $form->errors = $errors;
	}
	if(isset($username)) {
	   $form->values['username'] = $username;
	}
	// set custom classes to get labels moved to bottom:
	$form->error_class = 'error block';
	$form->info_class = 'info block';

	?>
	<div data-role="fieldcontain">
	<?php
	$numbers = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20);
	echo $form->open();
	?>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('shakes', __('Shakes:'));
	echo $form->select('shakes', $numbers, NULL, array('id'=>'shakes'));
	?>
	</div>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('entree', __('Entrees:'));
	echo $form->select('entree', $numbers, NULL, array('id'=>'entree'));
	?>
	</div>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('bars', __('Bars:'));
	echo $form->select('bars', $numbers, NULL, array('id'=>'bars'));
	?>
	</div>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('vegetables', __('Vegetables:'));
	echo $form->select('vegetables', $numbers, NULL, array('id'=>'vegetables'));
	?>
	</div>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('fruits', __('Fruits:'));
	echo $form->select('fruits', $numbers, NULL, array('id'=>'fruits'));
	?>
	</div>
	<div data-role="fieldcontain">
	<?php
	echo $form->label('notes', __('Notes:'));
	echo $form->textarea('notes');
	?>
	</div>
	<?php
	echo $form->submit(NULL, __('Save'));
	echo $form->close();
	?>
</div><!-- /content -->

<div data-role="footer">
	<h4>Page Footer</h4>
</div><!-- /footer -->