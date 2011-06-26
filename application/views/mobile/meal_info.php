<div data-role="header" data-position="inline">
	<a href="index.html" data-iconpos="notext" data-icon="arrow-l"></a>
	<h1>Meal Information for <?php echo $header;?></h1>
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
	echo $form->open();
	echo '<ul>';
	echo '<li class="li_label">'.$form->label('shakes', __('Shakes:')).'</li>';
	echo $form->select('shakes', array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
	echo '<li class="li_label">'.$form->label('entree', __('Entrees:')).'</li>';
	echo $form->select('entree', array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
	echo '<li class="li_label">'.$form->label('bars', __('Bars:')).'</li>';
	echo $form->select('Bars', array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
	echo '<li class="li_label">'.$form->label('vegetables', __('Vegetables:')).'</li>';
	echo $form->select('Vegetables', array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
	echo '<li class="li_label">'.$form->label('fruits', __('Fruits:')).'</li>';
	echo $form->select('Fruits', array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
	echo '<li class="li_label">'.$form->label('notes', __('Notes:')).'</li>';
	echo $form->textarea('notes');
	echo '</ul>';
	echo $form->submit(NULL, __('Save'));
	echo $form->close();
	?>
	</div>
</div><!-- /content -->

<div data-role="footer">
	<h4>Page Footer</h4>
</div><!-- /footer -->