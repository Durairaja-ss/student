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
            $gender=$row['gender'];
            $dept=$row['department'];
            $Skills = $row['Skill'];
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
            $gender=$_POST['gender'];
            $dept=$_POST['department'];
            $Skills =$_POST['Skill'];
            

             $sql = "update studentapp set name= '$name',rollno= '$rollno',age='$age',mobile='$mobile',gender='$gender',Skill='$Skills','department'=$dept where id = '$edit'";


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
                        <div>
                            <label>Choose your gender:</label><br>                        
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>
                        </div>
                        <div>
                        <label>Select your skills:</label><br>
                            <input type="checkbox" id="php" name="skill" value="PHP">
                            <label for="PHP">PHP</label><br>
                            <input type="checkbox" id="html" name="skill" value="HTML">
                            <label for="html">HTML</label><br>
                            <input type="checkbox" id="cpp" name="skill" value="Cpp">
                            <label for="cpp">C#</label><br>
                            <input type="checkbox" id="python" name="skill" value="Python">
                            <label for="python">PYTHON</label><br>
                    </div>
                    <div class="form-group">
                                    <label for="dept">Department</label><br/>
                                    <input list="Dept-options" id="dept" name="department">
                                    <datalist id="Dept-options">
                                        <option value="CSE">
                                        <option value="IT">
                                        <option value="EEE">
                                        <option value="ECE">
                                        <option value="AUTOMOBILE">
                                        <option value="MECHANICAL">
                                    </datalist>                        
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