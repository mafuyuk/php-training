<?php
require_once 'Person.php';

$p = new Person("のびた", "のび");
$fullName = $p->showFullName();
print $fullName;