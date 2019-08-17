<?php
if (isset($_POST['code']) && !empty($_POST['code'])){
$cod = $_POST['code'];

// Create connection
$conn = new mysqli("127.0.0.1", "root", "", "Accounts");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Unable to connect";
}

$stmt = $conn->prepare("INSERT INTO `".$cod."` (num, nar, deb) VALUES ( ?, ?, ? )");

if($stmt != false){

    $date = $_POST['date'];
    $no = $_POST['num'];
    $narr = $_POST['narrd'];
    $dr = $_POST['amdr'];
    

$stmt->bind_param("isi", $no, $narr, $dr);

$stmt->execute();

$stmt->close();
}
else{
    echo "Values cannot be added due to some error";
}
mysqli_close($conn);

}
else{
    echo "Error: HTML is sending null values";
}

?>