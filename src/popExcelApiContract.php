<?php
namespace Lixweb; 

abstract class popExcelApiContract extends Helpers {
  
  # fields 
  protected $allowed_extension = 'csv';
  protected $file_name         = ''; 
  protected $form_input_field  = ''; 
  protected $excel_resource    = ''; 
  protected $dataInColumn      = [];
  protected $names_arr         = []; 
  protected $contacts_arr      = [];

  /**
   * set the name of the excel file
   *
   * @param string $file_name
   */

   abstract protected function getFileName(); 

   /**
    * get names from the excel file
    *
    * @return array $names_arr
    */
   abstract public function getNames();

   /**
    * get contacts from the excel file
    *
    * @return array $contacts
    */
  abstract public function getContacts(); 

}
