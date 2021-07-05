<?php
#define class
class Res_obj{
    public $message = "";
    public $error = false;
    public $data = [];
    public $error_messages = [];
    public function send(){
        print(json_encode($this));
    }
}
#make object
$__RESPONCE = new Res_obj();
?>
