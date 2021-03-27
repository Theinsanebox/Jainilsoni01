<?php 

$name = $_POST['name'];
$password = $_POST['password'];

// $dh = "localhost";
// $dbun = "root";
// $dbpass = "";
// $dbn = "newbase";

// $db = new PDO('my sql:host= dbname='$dh.$dbn.'charset=utf'. $dbun. $dbpass);
// $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXECPIO);

// require_once('database.php');

// $sql = "INSERT INTO users (name,password)VALUES(?,?)";
// $stmtinsert = $db->prepare($sql);
// $result = $stmtinsert->execute([$name,$password]);
// if($result){
// 	echo "Connected";
// }

// else{
// 	echo "Error Occured";
// }
// echo $name . "" . $password . "";


$conn = new mysqli('localhost','root','','newbase');
if($conn->connect_error){
    die("Connection Failed Try Again".$conn->connect_error);
}
else{
    $stmt = $conn->prepare("insert into registration(name,password)VALUES(?,?)");
    $stmt->bind_param('ss'.$name,$password);
    echo "Registration completed sucessfully";
    $stmt->close();
    $conn->close();
}
?>