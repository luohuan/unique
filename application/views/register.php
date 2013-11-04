<?php 
echo form_open('register'); 
$data=array(
	'name' =>'username',
	'value' =>'username',
	'maxlength'=>'20',
);
echo form_input($data);
echo form_password(array('name'=>'password'));
echo form_input(array('name'=>'email','value'=>'name@example'));
echo form_submit('reg_submit','提交');
echo form_reset('reg_reset','重置');
/*End the php*/
?>


