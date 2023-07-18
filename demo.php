<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "ev_charging";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $from=$_POST['CLocation'];
    $to=$_POST['DLocation'];

    $sql="select * from places where From_place= ? and To_place=?";
    $stmt=$conn->prepare($sql);
    $stmt->bind_param("ss",$from,$to);
    $stmt->execute();

    $result=$stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $output = $row["Output"];
    } else {
        $output = "No Details about this places";
    }
    session_start();
    $_SESSION['output'] = $output;
    header("Location: display_data.html");
    exit(); 
}
?>