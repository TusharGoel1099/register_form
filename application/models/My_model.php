<?php
class My_model extends CI_Model{
    public function insert_data($data){
        $n=$data["name"];
        $e=$data["email"];
        $m=$data["mobile"];
        $d=$data["DOB"];
        $p=$data["pincode"];
        $query="select * from form where email='. $e .'";
        $x=$this->db->query($query);
        if($x){
            echo "USER ALREADY EXIST WITH THIS EMAIL";
        }
        else{
            $query="insert into form values('$n','$e','$m','$d','$p')";
            $this->db->query($query);
            echo "DATA INSERTED successfully";
        
        }
           
    }
}


?>