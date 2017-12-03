<?php

require_once '../vendor/autoload.php'; 
 
/* make available the following classes */ 
use Lixweb\Helpers;
use Lixweb\popExcelApiContract; 
use Lixweb\popExcelApi; 

/**
 * The name of the file input field in HTML
 *
 * @param string $form_input_field
 */
$form_input_field = 'excel_file'; 

$excelApi = new popExcelApi($form_input_field); 

$x = $excelApi->getNames();
var_dump($x);
