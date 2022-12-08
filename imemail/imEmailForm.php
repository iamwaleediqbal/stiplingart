<?php
if(substr(basename($_SERVER['PHP_SELF']), 0, 11) == "imEmailForm") {
	include '../res/x5engine.php';
	$form = new ImForm();
	$form->setField('Name', @$_POST['imObjectForm_10_1'], '', false);
	$form->setField('', @$_POST['imObjectForm_10_2'], '', true);
	$form->setField('Email', @$_POST['imObjectForm_10_3'], '', false);
	$form->setField('', @$_POST['imObjectForm_10_4'], '', true);
	$form->setField('Inspirational Story', @$_POST['imObjectForm_10_5'], '', false);
	$form->setField('', @$_POST['imObjectForm_10_6'], '', true);

	$errorMessage = '';
	if(@$_POST['action'] != 'check_answer') {
		if(!isset($_POST['imJsCheck']) || $_POST['imJsCheck'] != 'D8774EFC4D6529DD988276D3B0EE32A3' || (isset($_POST['imSpProt']) && $_POST['imSpProt'] != ""))
			die(imPrintJsError());
		$form->mailToOwner('noreply@talha-t.websitex5.me', '', 'john-michael@stipplingart.com', '', "", false);
		@header('Location: ../index.html');
		exit();
	} else {
		echo $form->checkAnswer(@$_POST['id'], @$_POST['answer']) ? 1 : 0;
	}
}

// End of file