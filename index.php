<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Record</title>
    <link rel="website icon" type="jpg" href="logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

       
</head>
<body>

        <section>
        <h1 style="text-align: center;margin: 50px 0;">Student Application</h1>
        <div class="container">
            
               <div class="row">
                    
                    <table>
                    
                        <thread>
                        
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>
                                <th>Rollno</th>
                                <th>Age</th>
                                <th>Mobile</th>
                                <th>Gender</th>
                                <th>Skill</th>
                                <th>Department</th>
                                <th>Options</th>
                            </tr>
                        </thread>
                                
                                <button type="button" class="btn btn-success btn-sm" style="width: 10%;"> <a href="add.php" class="text-light">ADDNEW</a> </button>
                        <tbody>
                            <?php
                                $connection = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($connection,"dbstu");

                                    $sql = "select * from studentapp";
                                    $run = mysqli_query($connection, $sql);

                                    $id= 1;
                                    while($row = mysqli_fetch_array($run)){
                                    {
                                        $uid=$row['id'];
                                        $name=$row['name'];
                                        $rollno=$row['rollno'];
                                        $age=$row['age'];
                                        $mobile=$row['mobile'];
                                        $gender=$row['gender'];
                                        $Skills = $row['skill'];
                                        $dept=$row['department']; 
                                    }
                                   
                                ?>
                                    

                                    <tr>
                                        <td><?php echo $id ?></td>
                                        <td><?php echo $name ?></td>
                                        <td><?php echo $rollno ?></td>
                                        <td><?php echo $age ?></td>
                                        <td><?php echo $mobile ?></td>
                                        <td><?php echo $gender ?></td>
                                        <td><?php echo $Skills ?></td>
                                        <td><?php echo $dept ?></td>  
                                        
                                        <td>
                                            <button class="btn btn-primary"> <a href='edit.php?edit=<?php echo $uid ?>'class="text-light">Edit</a> </button> 
                                            <button class="btn btn-danger"> <a href='delete.php?del=<?php echo $uid ?>'class="text-light">Delete</a> </button> 
                                    </td>
                                    </tr>

                                        <?php $id++; }?>
                        </tbody>   
                    </table>
                    
                    
                    
                </div>      
           
        </div>
</body>
</html>         