<?php
$db_user="u606189373_Reg";
$db_pass="DCLaker21";
$db_name="u606189373_Login";
$db= new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

