<?php
if (isset($_POST['code']) && !empty($_POST['code'])){
$cod = $_POST['code'];

// Create connection
$conn = mysqli_connect("127.0.0.1", "root", "", "Accounts");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo "Blast";
}

 $sql = "CREATE TABLE `".$cod."` (num INT(30), nar VARCHAR(255), deb INT(30), num2 INT(30), nar2 VARCHAR(255), crd INT(30))";
if (mysqli_query( $conn , $sql)) {
    echo "Account created successfully";
} else {
    echo "Error creating account: ".mysqli_error($conn);
}

mysqli_close($conn);

}
else{
    echo "Nothing Happening";
}

?>