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
   * get the data in the excel file 
   *
   * @param  int $colum_index
   * @return array $dataInColumn
   * @return string err1
   * @return string err2
   */
   
   public function getDataByColumn($column_index){
       if( ! $this->isEmpty( ) ){
         $this->file_data = fopen($_FILES[$this->form_input_field]["tmp_name"], "r");
          if( $this->isValidExt() ){
            while ( $column = fgetcsv($this->file_data) ) {
                if( ! empty($column[$column_index]) ){
                array_push( $this->dataInColumn, trim( $column[$column_index] ) );
                }
            } 
            return $this->dataInColumn; 
          }
            return "err1";
       }
      return "err2"; 
   }


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
