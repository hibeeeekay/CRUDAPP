<?php


function Createdb(){
   

    $servername = "remotemysql.com";
    $username = "r3h2dtMIhE";
    $password = "992AANkodJ";
    $dbname = "r3h2dtMIhE";

// Connect to DB
$con = mysqli_connect($servername,$username,$password);


    // Check Connection
    if (!$con){
        die("Connection Failed : " . mysqli_connect_error());
    }

    // create Database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if(mysqli_query($con, $sql)){
        $con = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
                        CREATE TABLE IF NOT EXISTS laptop(
                            id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                            laptop_Maker VARCHAR (50) NOT NULL,
                            laptop_colour VARCHAR (20),
                            laptop_price FLOAT 
                        );
        ";

        if(mysqli_query($con, $sql)){
            return $con;
        }else{
            echo "Cannot Create table...!";
        }

    }else{
        echo "Error while creating database ". mysqli_error($con);
    }

}

?>
