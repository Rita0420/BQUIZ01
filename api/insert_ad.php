<?php

include_once "db.php";

dd($_POST);
$_POST['sh']=1;

$Ad->save($_POST);
to("../backend.php?do=ad");