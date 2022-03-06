<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
<div class="wrapper">
        <h2>Identity Registration</h2>
        <form action="data.php" method="POST" enctype="multipart/form-data">
            <div class="input-box">
                <input type="number" name="id_number" placeholder="Enter your id number" required>
            </div>
            <div class="input-box">
                <input type="text" name="name" placeholder="Enter your name" required>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Create password" required>
            </div>
            <div class="input-box">
                <input type="number" name="age" placeholder="Enter your age" required>
            </div>
            <div class="input-box">
                <input type="text" name="designation" placeholder="Enter you Ocupation" required>
            </div>
            <div class="input-box">
                <input type="number" name="contact" placeholder="Enter your Contact number" required>
            </div>
            <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender"value="female">Female <br> <br>
                <input type="file" name="upload_img"> <br> <br>

            <div class="policy">
                <input type="checkbox">
                <h3>I accept all terms & condition</h3>
            </div>
            <div class="input-box button">
                <input type="submit" name="submit" value="Register Now">
            </div>
            <div class="text">
                <h3>Already have a account? <a href="#">login now</a></h3>
            </div>
        </form>
    </div>






</body>
</html>