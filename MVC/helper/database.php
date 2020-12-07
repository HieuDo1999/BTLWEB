<?php

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

       //validate trong sql
       public function validateSql($sql){
        $sql=preg_replace("/[^A-Za-z0-9=_*',$ ]/",'',$sql);
        $search=['<?php','<script>','#'];
        $sql=str_replace($search,'',$sql);
        return $sql;
    }
    public function validateId($sql){
        $sql=preg_replace("/[^A-Za-z0-9]/",'',$sql);
        return $sql;
    }








    }

?>