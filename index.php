<?php

$arrayFromCSV =  array_map('str_getcsv', file($_FILES['csv']['tmp_name']));
echo json_encode($arrayFromCSV);

?>