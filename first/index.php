<html lang="en-US">

<head>
    <title>ADVISOR.COM</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>

<body>
    <div align="center" style="background-color: rgb(43, 7, 173);color: aquamarine;padding: 0px">
        <img src="advisor.png" alt="image" style="width: 600px;height: 300px">
    </div>
    <marquee behavior="scroll" direction="right" style="color: brown; font-size: 30px">JUST ASK</marquee>
    <marquee behavior="scroll" direction="left" style="color: brown; font-size: 30px">HELP US GROW</marquee>
    <h2 style=" text-align: center;color: blue;border:2px solid teal " title="description">WEBSITE WHICH AIMS AT PROVIDING QUALITY SOLUTION AS SOON AS POSSIBLE </h2>
    <div class="topnav">
        <link rel="stylesheet" href="first1.css">
        <a class="active" href="#home">HOME</a>
        <a href="newpost.php">NEW</a>
        <a href="oldpost.php">OLD</a>
        <a href="about.html">ABOUT</a>
    </div>
    <div align="center">
        <img src="wall.jpg" alt="wall" style="width: 400px;height: 250px">
    </div>
    <h3 style="text-align: center">
        Life is not easy at every point in time we go through many problems and let's face it not everyone is good at everthing.
    </h3>
    <br>
    <p style="text-align:center;color:blue">
        <i> Advisor aims at providing the one in need with the best possible advice. The domain of the advice does not matter
            but the quality does. So here we unite to help everyone grow.</i>
    </p>
    <div class="dropdown" style="float: left">
        <link rel="stylesheet" href="first1.css">
        <button class="dropbtn">Categories</button>
        <div class="dropdown-content" style="left: 0;">
            <a href="#general">GENERAL</a>
            <a href="#study">STUDY</a>
            <a href="#career">CAREER</a>
            <a href="#relation">RELATIONS</a>
            <a href="#money">MONEY</a>
        </div>
    </div>
    <div class="dropdown" style="float: right">
        <button class="dropbtn">Compose</button>
        <div class="dropdown-content" style="right: 0">
            <a href="answerit.php">Submit an Answer</a>
            <a href="#history">My History</a>
        </div>
    </div>
    <div style=" width: 100px;height:100px; padding: 20px;">
        <br>
        <br>
        <br>
        <br>
        <form method="POST" action="insert.php" >
            First Name:
            <br>
            <input type="text" name="firstname" maxlength="25">
            <br>
             Last Name:
            <br>
            <input type="text" name="lastname" maxlength="25">
            <br>
            Question:
            <br>
            <input type= "text" name= "post" maxlength= "99">
            <br>
            Category:
            <br>
            <select name= 'category'>
            <option value="general">GENERAL</option>
            <option value="study">STUDY</option>
            <option value="career">CAREER</option>
            <option value="relation">RELATION</option>
            <option value="money">MONEY</option>
            </select>
            <br>
            <input class= "B2" type="submit" name="submit" value="Submit">
        </form>
    </div>


</body>

</html>