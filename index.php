<?php
require_once('./operations.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image upload</title>
    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <h1 class="text-center my-3">Formulaire</h1>

    <div class="container d-flex justify-content-center">
        <form action="display.php" method="post" class="w-50 " enctype="multipart/form-data">
            <?php
            inputFields("username", "username", "", "text");
            inputFields("Mobile", "mobile", "", "text");
            inputFields("", "file", "", "file");

            ?>

            <button class="btn btn-dark" type="submit" name="submit">Soumettre</button>

        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>