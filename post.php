<?php
require_once("dangky.php");
$_POST["btn_submit"];

    $username = $_POST["username"];
    $password = $_POST["pass"];
    $name = $_POST["name"];
    $email = $_POST["email"];

    $_SESSION["user"] = [
        "username" => $name,
        "password" => $password
    ];

    echo "username:". $username."<br/>"."password:".$password."<br/>"."name:".$name."<br/>"."email".$email;

$server ="localhost";
$userDB = "root";
$passDB = "";
$dbName = "java_jdbc";

$conn = new mysqli($server,$userDB,$passDB,$dbName);

if($conn->connect_errno){
    die("Connect Error");
}
//echo "Connect seccess";
$insert_sql = "insert into user_db (username,email,password)
values ('$username','$email','$password')";
$conn->query($insert_sql);

?>



