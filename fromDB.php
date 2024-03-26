<?php
$_POST['userMail']=trim($_POST['userMail']);
$_POST['password']=trim($_POST['password']);
$_POST['userMail']=strip_tags($_POST['userMail']);
$_POST['password']=strip_tags($_POST['password']);
$_POST['userMail']=htmlentities($_POST['userMail']);
$_POST['password']=htmlentities($_POST['password']);
if(!$_POST['userMail']){$error_msg.="Nav ievadīts e-pasts!<br>";}
if(!$_POST['password']){$error_msg.="Nav ievadīta parole!<br>";}

