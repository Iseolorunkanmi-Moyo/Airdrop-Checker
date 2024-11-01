<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
</head>
<body>
    <?php
    
    $index = $_GET['index'];

    $data = file_get_contents('data.json');
    $data_array = json_decode($data);
    $row = $data_array[$index];

    if(isset($_POST['Save'])){

        $input = array(
            "name" => $_POST['name'],
            "type" => $_POST['type'],
            "login" => $_POST['login'],
            "register" => $_POST['register']
        );

        $data_array[$index] = $input;
        $data = json_encode($data_array, JSON_PRETTY_PRINT);
        file_put_contents('data.json', $data);
        // header('location: index.php');


    }
    ?>
<div class="container">
    <h1 class="text-center page-header">Edit page</h1>
    <div class="row">
        <div class="col-1"></div>
        <div class="col-9"><a class="brn btn-primary" href="index.php">Back</a>
            <form method="post">
                <input type="text" class="form-control mb-3 mt-3" name="name" placeholder="Name" value="<?php echo $row->name;?>" >
                <input type="text"class="form-control  mb-3" name="type" placeholder="Type" value="<?php echo $row->type;?>" >
                <input type="text"class="form-control  mb-3" name="login" placeholder="Login Link" value="<?php echo $row->login;?>" >
                <input type="text" class="form-control mb-3" name="register" placeholder="Register Link" value="<?php echo $row->register;?>" >
                <input type="submit" class="btn btn-primary" value="Save" name="Save" >
                
            </form>            
        </div>
    </div>
</div>

</body>
</html>