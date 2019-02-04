<html lang="en-US">
<head>
<title>submit an answer</title></head>
<body>
<div style="text-align: center;border:2px solid brown; padding: 30px" class="NewPost">
            <link rel="stylesheet" href="first1.css"> ADVISE </div>
            <?php
            include 'insert1.php';
            ?>
            <?php
            $sql = "SELECT ID, firstname, lastname, post, category FROM userdata";
            $result = mysqli_query($connect, $sql);
            echo "<table border='1' align= 'center' cellpadding= '20px' width= '50%'>

          <tr>

          <th>Id</th>

          <th>Firstname</th>

          <th>Lastname</th>

          <th>Post</th>

          <th>Category</th>

           </tr>";

            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {

                    echo "<tr>";

                    echo "<td>" . $row['ID'] . "</td>";

                    echo "<td>" . $row['firstname'] . "</td>";

                    echo "<td>" . $row['lastname'] . "</td>";

                    echo "<td>" . $row['post'] . "</td>";

                    echo "<td>" . $row['category'] . "</td>";

                    echo "</tr>";

                }

                echo "</table>";
            } else {
                echo "0 results";
            }
            mysqli_close($connect);
            ?>
          
            <form action = "insert2.php" method= "post">
                ID to update :<input type="text" name= "ID" required><br>
                answer       :<input type="text" name="answer"><br>
                <input class= "B2" type= "submit" name="update" value="update data">
        </form>

</body>
</html>
