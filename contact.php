<!-- php code for submition of data to database-->

<?php
$server_name = "localhost";
$username = "root";
$password = "";
$database_name = "contacts";

$conn = mysqli_connect($server_name, $username, $password, $database_name);
//now check the connection
if (!$conn) {
    die("Connection Failed:" . mysqli_connect_error());
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $sub = $_POST['sub'];
    $msg = $_POST['msg'];

    $sql_query = "INSERT INTO contactus (name,email,sub,msg)
	 VALUES ('$name','$email','$sub','$msg')";

    if (mysqli_query($conn, $sql_query)) {
        //echo "New Details Entry inserted successfully !";
        //  To redirect form on a particular page
        header("Location:contact.html");
    } else {
        //echo "Error: " . $sql . "" . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>


<!-- End of php code for submition of data to database-->