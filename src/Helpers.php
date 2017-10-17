<?php
namespace Lixweb; 

class Helpers {
    /**
     * check if file name has been set
     *
     * @return bool true/false
     */

     protected function isEmpty(){
        if( empty( $this->file_name ) ){
           return true; 
        }
           return false; 
     }

    /**
     * check if the file extension is valid
     *
     * @return bool true/false
     */

     protected function getExtension(){
        if( ! $this->isEmpty() ){
           $name_in_file_arr = explode( "." , $_FILES[$this->form_input_field]["name"] ); 
           return $extension   = end($name_in_file_arr);
        }
           return false; 
     }

     /**
      * check if the file extension is valid
      *
      * @return bool true/false
      */
     protected function isValidExt( ){
          $file_ext = $this->getExtension( ); 
          if( $file_ext == $this->allowed_extension ){
            return true; 
          } else {
            return false; 
          }
     }

     /**
      * Gets the submitted files name from the input field provided
      * in the HTML form
      * 
      * @param string $file_input_field
      */
     public function fileNameSettingHelper( $form_input_field ){
       return $_FILES[ $form_input_field ][ "name" ];
     }

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


} #end of Helpers class 