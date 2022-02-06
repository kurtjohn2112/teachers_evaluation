<?php 
    function connect_db(){


        $conn = new mysqli(
                            'localhost',
                            'root',
                            'root',
                            'teacher_eval'
                        );


        return $conn;
    }


  
?>