<?php
    $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"dbstu");
     $edit = $_GET['edit'];


        $sql = "select * from studentapp where id = '$edit'";

        $run = mysqli_query($connection,$sql);

        while($row=mysqli_fetch_array($run))
        {
            $uid=$row['id'];
            $name=$row['name'];
            $rollno=$row['rollno'];
            $age=$row['age'];
            $mobile=$row['mobile'];
        
        }
    

?>





<?php
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"dbstu");

    if(isset($_POST['submit']))
        {
            $edit = $_GET['edit'];
             $name = $_POST['name'];
             $rollno = $_POST['rollno'];
             $age = $_POST['age'];
             $mobile = $_POST['mobile'];

             $sql = "update studentapp set name= '$name',rollno= '$rollno',age='$age',mobile='$mobile' where id = '$edit'";


             if(mysqli_query($connection,$sql))
             { 
                echo '<script> location.replace("index.php")</script>';
             }
             else
                {
                    echo "Error" . $connection->error;
                }

            


        }


?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
        <section>
        <h1 style="text-align: center;margin: 50px ;">Student Register</h1>
        <div class="container">
            
             <div class="row">
                <form action="add.php" method="post">
                    <div class="save">
                        <div class="name">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" value="<?php echo $name ?>">
                        </div> 
                        <div class="rollno">Rollno</label>
                            <input type="number" name="rollno" class="form-control" placeholder="Enter Rollno" value="<?php echo $rollno ?>">
                        </div> 
                        <div class="age">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter Age" value="<?php echo $age ?>">
                        </div> 
                        <div class="mobile">Mobile</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Enter Number" value="<?php echo $mobile ?>">
                        </div> 
                        <br>
                        <br>
                        <input type="submit" class="btn btn-primary" name="submit" value="Edit">
                    </div>
                </from>           
             </div>      
           
        </div>
</body>
</html>         