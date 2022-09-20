<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
//connected mysql
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($conn){
    //check database | if false create database bengkel
    check_database($conn);
}

//check database
function check_database($conn)
{
    if ($conn->query("USE Bengkel")) {
        check_table($conn);
    }else{
        if ($conn->query("CREATE DATABASE Bengkel")) {
            check_database($conn);
        } else {
            die("Error creating database: " . $conn->error);
        }
    }
    //default return false
    return false;
}

//check table user
function check_table($conn)
{
    //check if table user exist
    if ($conn->query("SELECT 1 FROM user")) {

        //get all user data
        $sql = $conn->query("SELECT * FROM user");

        //count if user data > 0
        if ($sql->num_rows > 0) {
            // output data of each row
            $result = array();
            while ($row = $sql->fetch_assoc()) {
               array_push($result, $row);
            }

            return $_SESSION['result'] = $result;

        } else {
            return null;
        }
    } else {
        //create table user
        $create = "CREATE TABLE User (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            address TEXT NOT NULL,
            email VARCHAR(50),
            create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

        if ($conn->query($create)) {
            echo '<br>' . 'Successfully create table';

            $insert_sql = "INSERT INTO user 
            (firstname,lastname,address,email) VALUES 
            ('atikah','maisara','mpc','mpc@gov.my'),('amier','hazlami','mpc','mpc@gov.my')";
            if($conn->query($insert_sql)){
                check_database($conn);
            }else{
                die('Cannot insert user');
            }

            check_database($conn);
        } else {

            if ($err = $conn->error_list) {
                if (is_array($err)) :
                    for ($i = 0; $i < sizeof($err); $i++) {
                        echo 'Error : ' . $err[$i]['error'];
                    }
                endif;
            }
        }
    }
    return false;
}