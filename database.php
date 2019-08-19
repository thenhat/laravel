<?php
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
values ('NHAT3212','THENHAT1230@gmail','65443')";
$conn->query($insert_sql);

$sql = "SELECT * from user_db";
$result =$conn-> query($sql);

if($result->num_rows>0){
//    var_dump($result);

    while ($row = $result->fetch_assoc()){
        echo $row["username"]."-".$row["email"]."-".$row["password"]."<br/>";
    }
}
?>