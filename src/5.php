<?php 
$name = $_POST["username"];
$email = $_POST["useremail"];
$password = $_POST["password"];
if(mysqli_num_rows($result) == 0){
    $query = mysqli_prepare($conn, "INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    mysqli_stmt_bind_param($query, 'sss', $name, $email, $password);
    mysqli_stmt_execute($query);
    header("Location: login.php");
} else {
    echo "User already exists";
}
?>