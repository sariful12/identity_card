<?php
    $male_status = 'unchecked';
    $female_status = 'unchecked';
    if(isset($_POST['submit'])){
        $EmployeId =$_POST['id_number'];
        $Name      =$_POST['name'];
        $Password  =$_POST['password'];
        $Gender    =$_POST['gender'];
        $Age       =$_POST['age'];
        $Designation=$_POST['designation'];
        $contact   =$_POST['contact'];
        $img_name  =$_FILES['upload_img']['name'];
        $Temp_name =$_FILES['upload_img']['tmp_name'];
        move_uploaded_file($Temp_name,"upload/".$img_name);
    if($Gender=='male'){
        $male_status = 'checked';
    }elseif($Gender=='female'){
        $female_status = 'checked';  
    }
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <title>
        Identity Card Design
        | HTML and CSS Code
    </title>
</head>

<body>
    <div class="card">
       <img src="upload/<?php
        if(isset($img_name)){
            echo $img_name;
        }
        ?> " alt="">
        <h1><?php
                    if(isset($Name)){
                        echo $Name;
                    }
                    ?></h1>

        <table>
            <tr>
                <td><strong>Employee ID</strong></td>
                <td><?php
                    if(isset($EmployeId)){
                        echo $EmployeId;
                    }
                    ?></td>
            </tr>
            <tr>
                <td><strong>Password</strong></td>
                <td><?php
                if(isset($Password)){
                    echo $Password;
                }
                    ?> </td>
            </tr>
            <tr>
                <td><strong>Gender</strong></td>
                <td><?php
                    if(isset($Gender)){
                        echo $Gender;
                    }
                    ?> </td>
            </tr>
            <tr>
                <td><strong>Age</strong></td>
                <td><?php
                    if(isset($Age)){
                        echo $Age;
                    }
                    ?> </td>
            </tr>
            <tr>
                <td><strong>Designation</strong></td>
                <td><?php
                    if(isset($Designation)){
                        echo $Designation;
                    }
                    ?> </td>
            </tr>
            <tr>
                <td><strong>Contact</strong></td>
                <td> <?php
                    if(isset($contact)){
                        echo $contact;
                    }
                    ?>
            </tr>
        </table>
        <div class="social">
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
        </div>
    </div>
</body>

</html>