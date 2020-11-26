<?php

if(!defined('in_site')) die('not found');
    class database {
       public $conn;
       public function connectDB(){
           global $conn;
           if( $conn=new mysqli('localhost','root','','web'))
           {

           }
           else {
               echo "no connect to database";
           }
         
       }
       public function excuteDB($sql){
           $this->connectDB();
           global $conn;
           return mysqli_query($conn,$sql);

       }
       function db_get_list($sql){
        $this->connectDB();
        global $conn;
        $data  = array();
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
        }
        return $data;
    }

       







    }

?>