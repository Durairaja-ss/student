<?php
     $connection = mysqli_connect("localhost","root","");
     $db = mysqli_select_db($connection,"dbstu");
    

 

    if(isset($_POST['submit']))
        {   
             $name = $_POST['name'];
             $rollno = $_POST['rollno'];
             $age = $_POST['age'];
             $mobile = $_POST['mobile'];
             $gender=$_POST['gender'];
             $dept=$_POST['department'];
             
             $Skills = isset($_POST['Skill']) ? $_POST['Skill'] : [];
             
             $SkillsString = !empty($Skills) ? implode(", ", $Skills) : '';
             
    
             
             

             $sql = "insert into studentapp(name,rollno,age,mobile,gender,Skill,department)values('$name','$rollno','$age','$mobile','$gender','$SkillsString','$dept')";

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
        <h1 style="text-align: center;margin: 50px 0;">Student Register</h1>
        <div class="container">
            
             <div class="row">
                <form action="add.php" method="post">
                    <div class="save">
                        <div class="name">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                        </div> 
                        
                        <div class="rollno">Rollno</label>
                            <input type="number" name="rollno" class="form-control" placeholder="Enter Rollno" required>
                        </div> 
                        
                        <div class="age">Age</label>
                            <input type="number" name="age" class="form-control" placeholder="Enter Age" required>
                        </div> 
                        <div class="mobile">Mobile</label>
                            <input type="number" name="mobile" class="form-control" placeholder="Enter Number" required>
                        </div> 
                        <div class="rdo">       
                            <label>Choose your gender:</label><br>                        
                            <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label>
                        </div>
                         <div class="chbox">
                             <label>Select your Skills:</label><br>
                             <input type="checkbox" name="Skill[]" value="PHP"> PHP <br>
                             <input type="checkbox" name="Skill[]" value="HTML"> HTML <br>
                             <input type="checkbox" name="Skill[]" value="C#"> C# <br>
                             <input type="checkbox" name="Skill[]" value="PYTHON"> PYTHON <br>

                             <br>                       
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
                        <input type="submit" class="btn btn-primary" name="submit" value="Save">
                    </div>
                </from>           
             </div>      
           
        </div>
</body>
</html>         