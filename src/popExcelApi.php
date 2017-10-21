<?php
namespace Lixweb; 

require_once 'popExcelApiContract.php';

class popExcelApi extends popExcelApiContract {
  
   public function __construct( $form_input_field ){ 
      
      $this->form_input_field = $form_input_field; 
     
      $this->getFileName( );
   }
   
   protected function getFileName( ){
      $this->file_name  = $this->fileNameSettingHelper( $this->form_input_field ); 
   }
    
   public function getNames( ) {
     return $this->names_arr = $this->getDataByColumn( 1 );      
   }

    public function getContacts( ){
     return $this->contacts_arr = $this->getDataByColumn( 2 );
    }

} #end of popExcelApi Class 
