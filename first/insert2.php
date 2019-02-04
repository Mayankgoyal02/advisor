<?php
include 'insert1.php';
?>
<?php
$ID = $_POST['ID'];
$answer = $_POST['answer'];


mysqli_query($connect, "INSERT INTO answerdata(firstname, lastname,post,answer,category) 
SELECT firstname, lastname,post,'$answer', category FROM userdata WHERE ID='$ID'");


if (mysqli_affected_rows($connect) > 0) {
    echo "<center><h1> DATA ADDED </center></h1>";
} else {
    echo "data not added";
}
mysqli_close($connect);
?>
 