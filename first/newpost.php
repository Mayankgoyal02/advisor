<html lang="en-US">

<head>
    <title>NEW ENTRY</title>
    <style> table
    {
border-style:solid;
border-width:2px;
border-color:pink;

    }
    </style>
    
</head>

<body>
        <div style="text-align: center;border:2px solid brown; padding: 30px" class="NewPost">
            <link rel="stylesheet" href="first1.css"> NEW POST </div>
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
            </body>
            </html>

        

            