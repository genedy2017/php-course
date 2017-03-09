<?php
	$form = new Form('post', 'add-student.php');
	$form->addText('first_name', 'First name');
	$form->addText('last_name', 'Last name');
	$form->addText('email', 'Email');
	$form->addText('dob', 'Date of birth (yyyy-mm-dd)');
	$form->addSubmit('save', 'Add student');
	echo $form->write();