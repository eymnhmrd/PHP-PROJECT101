<?php
    require_once("db.php");
    require_once("component.php");

    $com = Creatdb();

    if(isset($_POST['create'])){
        CreateData();
    }

    function CreateData(){
        $book_name = textboxvalue("book_name");
        $book_publisher = textboxvalue("book_publisher");
        $book_price = textboxvalue("book_price");

        if($book_name && $book_publisher && $book_price){

            $sql = "INSERT INTO books (book_name, book_publisher, book_price) 
                    VALUES ('$book_name','$book_publisher','$book_price')";

            if(mysqli_query($GLOBALS['com'],$sql)){
                echo 'Record Inserted Successfully';
            }else{
                echo 'Record Not Inserted';
            }
        }else{
            echo 'Please Enter Data in the Textbox';
        }
    }

    function textboxvalue($value){
        $textbox = mysqli_real_escape_string($GLOBALS['connection'],trim($_POST[$value]));
        if(empty($textbox)){
            return false;
        }else{
            return $textbox;
        }
    }
?>