<?php
require "connect.php"; // ده بيطبع Connection successful

// كود الحفظ لما تدوسي الزرار
if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO sbtask (firstname, lastname, email, password) 
            VALUES ('$first_name', '$last_name', '$email', '$password')";
    
    if($conn->query($sql) === TRUE){
        echo "<h3 style='color:green'>تم التسجيل بنجاح!</h3>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!-- ده كود الفورم اللي كان ناقص -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
<h2>Register Form</h2>
<form action="registers.php" method="POST">
    <input type="text" name="first_name" placeholder="First Name" required><br><br>
    <input type="text" name="last_name" placeholder="Last Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" name="register">Register</button>
</form>
</body>
</html> -->