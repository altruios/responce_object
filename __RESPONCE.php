<?php
#define class
class __RES_OBJ{
     public $message = "";
     public $error = false;
     public $data = [];
     public $error_messages = [];
     public function add_error($error){
          $this->error=true;
          array_push($this->error_messages,$error);
     }
     public function add_data($data){
          array_push($this->data,$data);
     }
     public function send(){
          print(json_encode($this));
          exit();
     }
     public function mysql_table_row_to_object($row){
          $data_object = new stdClass();
          foreach($row as $key_value_pair){
               $data_object->{$key_value_pair[0]}=$key_value_pair[1];
          }
          return $data_object;
     }
}
#make object
$__RESPONCE = new __RES_OBJ();
?>
