<?php 


session_start();
    // function connect_db(){


    //     $conn = new mysqli(
    //                         'localhost',
    //                         'root',
    //                         'root',
    //                         'teacher_eval'
    //                     );


    //     return $conn;
    // }
    function connect_db(){

    //     // hosting credentials, do not touch this or enable this

        $conn = new mysqli(
                            'us-cdbr-east-05.cleardb.net',
                            'b41d6bbe2d096e',
                            '12fc5629',
                            'heroku_f78abd310387182'
                        );


        return $conn;
    }


  
?>