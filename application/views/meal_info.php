<?php
$form = new Appform();
if(isset($errors)) {
   $form->errors = $errors;
}

// set custom classes to get labels moved to bottom:
$form->error_class = 'error block';
$form->info_class = 'info block';

?>
<div id="box">
   <div class="block">
      <h1><?php echo __('Todays HMR Info'); ?></h1>
      <div class="content">
<?php
echo $form->open();
echo '<ul>';
echo '<li>'.$form->label('shakes', __('Shakes')).'</li>';
echo $form->select('shakes', array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
echo '<li>'.$form->label('entree', __('Entree')).'</li>';
echo $form->select('entree', array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20));
echo '</ul>';
echo $form->submit(NULL, __('Save'));
echo $form->close();
?>
      </div>
   </div>
</div>


