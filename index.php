<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap.css">
    
</head>
<body>
    <div class="container">

    <h1 class="page-header text-center">Airdrop Checker</h1>
    <div class="row">
        <div class="col-12">
            <a class="btn btn-primary" href="add.php">Add</a>
            <table class="table table-bordered table-stripped mt-3 table-dark">
                <thead>
                    <th>Index</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Link</th>
                    <th>Action</th>
                </thead>

                <tbody>
                    
                    <?php 
                        $data = file_get_contents('data.json');
                        $data = json_decode($data);

                        $index = 0;
                        foreach ($data as $row){
                            echo "
                            <tr>
                                <td>".$index."</td>
                                <td>".$row->name."</td>
                                <td>".$row->type."</td>
                                <td class='gap'>
                                    <a class='btn btn-success ' href=".$row->login.">Check In</a> 
                                    <a  class='btn btn-light ' href=".$row->register."> Register </a> 
                                    <a  class='btn btn-primary ' href=".$row->thread."> Thread </a> 
                                </td>
                                <td>
                                    <a href='edit.php?index=".$index." 'class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete.php?index=".$index." 'class='btn btn-danger btn-sm'>Delete</a>
                                </td>
                            </tr>
                            ";

                            $index++;
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
         
    </div>
</body>
</html>