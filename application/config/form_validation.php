<?php
$config=array(
	'register/submit'=>array(
		array(
			'field'=>'username',
			'label'=>'Username',
			'rules'=>'trimrequired|is_unique[User.Username]|max_length[20]|xss_clean',
		),
		array(
			'field'=>'password',
			'label'=>'Password',
			'rules'

