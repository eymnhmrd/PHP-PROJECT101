<?php
    require_once("php/component.php");
    require_once("php/db.php");

    Creatdb();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-Project 101</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <main>
        <div class="container text-center">
            <h1 class="py-4 bg-dark text-light rounded"><i class="fas fa-swatchbook"></i> Book Store</h1>
        

            <div class="d-flex justify-content-center">
                <form action="" method="POST" class="w-50">
                    <div class="py-2">
                        <?php inputElement("<i class='fas fa-id-badge'></i>", "ID", "book_id", ""); ?>
                    </div>
                    <div class="pt-2">
                        <?php inputElement("<i class ='fas fa-book'></i>","Book Name","book_name",""); ?>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <?php inputElement("<i class='fas fa-people-carry'></i>","Publisher","book_publisher",""); ?>
                        </div>
                        <div class="col">
                            <?php inputElement("<i class='fas fa-dollar-sign'></i>","Price","book_price",""); ?>
                        </div>
                    </div>
                        <div class="d-flex justify-content-center">
                            <?php buttonElement("btn-create","btn btn-success","Create","create",""); ?>
                            <?php buttonElement("btn-read","btn btn-primary","Read","read",""); ?>
                            <?php buttonElement("btn-update","btn btn-light border","Update","update",""); ?>
                            <?php buttonElement("btn-delete","btn btn-danger","Delete","delete",""); ?>
                        </div>
                </form>
            </div>
            <div class="d-flex table-data">
                <table class='table table-striped table-dark'>
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Book Name</th>
                            <th>Publisher</th>
                            <th>Book Price</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Harry Potter</td>
                            <td>J.K. Rowling</td>
                            <td>$10</td>
                            <td><i class="fas fa-edit btnedit"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>