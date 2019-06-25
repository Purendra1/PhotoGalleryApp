<?php
if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
        /* 
           Up to you which header to send, some prefer 404 even if 
           the files does exist for security
        */
        header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		echo "<h1>403 Forbidden</h1>";
        /* choose the appropriate page to redirect users */
        //die( header( 'location: /error.php' ) );
		exit(0);
}
//echo "hello";
$servername=$_SERVER['SERVER_NAME'];
$username="root";
$password="";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$sql="USE viz";
if ($conn->query($sql) === TRUE) {
 echo "Database connected successfully";
} else {
 echo "Error creating database: " . $conn->error;
}
$email=($_POST["email"]);
$password=($_POST["password"]);
$fullname=($_POST["fullname"]);
?>