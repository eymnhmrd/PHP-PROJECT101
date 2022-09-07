<?php 

function Creatdb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bookstore";

    $connection = mysqli_connect($servername, $username, $password);

    if(!$connection){
        die("Connection Failed: ".mysqli_connect_error());
    }

    $sql = "CREATE DATABASE IF NOT EXISTS bookstore";

    if(mysqli_query($connection,$sql)){
        $connection = mysqli_connect($servername, $username, $password, $dbname);

        $sql = "
            CREATE TABLE IF NOT EXISTS books(
                id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                book_name VARCHAR(25) NOT NULL,
                book_publisher VARCHAR(20),
                book_price FLOAT
            )";
    }
    else{
        echo "Error while creating database".mysqli_error($connection);
    }
}
?>