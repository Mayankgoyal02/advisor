<?php
include 'insert1.php';
?>
<?php
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$post = $_POST['post'];
$category = $_POST['category'];

mysqli_query($connect, "INSERT INTO userdata(firstname,lastname,post,category)
VALUES ('$first_name','$last_name','$post','$category')");
if (mysqli_affected_rows($connect) > 0) {
    echo "<center><h1> DATA ADDED </center></h1>";
} else {
    echo "data not added";
}
mysqli_close($connect);
?>