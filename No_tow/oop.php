<?php
class person{
    public $name;
    public $email;

    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function get_name(){
        return $this->name = $name;
    }
    public function set_name($name){
        $this->name = $name;
    }

    //email

    public function get_email(){
        return $this->email = $email;
    }
    public function set_email($email){
        $this->email = $email;
    }


    public function all_info(){
       echo "Name : ".$this->name."\n";
       echo "Email : ".$this->email."\n";
}
}

$obj =new person("MD:NAIM","mdnaim@gmail.com");
$obj ->all_info();