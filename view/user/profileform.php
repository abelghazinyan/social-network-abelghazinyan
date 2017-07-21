<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <link rel = "stylesheet"
          type = "text/css"
          href = "../Styles/ProfileFormStyle.css" />
    <link rel = "stylesheet"
          type = "text/css"
          href = "../Styles/HeaderStyle.css" />
</head>
<body>
<?php require "../view/templates/header.php"?>
<div class="body">

    <div class="profile">
        <img src="../Profile/profile.jpg">
    </div>
    <div class="edit">
        <form method="post" enctype="multipart/form-data">
            <input type="hidden" name="form" value="profile">
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload">
        </form>
        <span style="color:crimson;font-size: 15px;"><?php echo $uploader->getImageError();?></span>
    <form method="post"><br><br><br><br><br>
        <input type="hidden" name="form" value="form">
        <label for="fname">First Name</label> <input type="text" name="fname" id="fname" value="Abel"><br><br>
        <label for="lname">Last  Name</label><input type="text" name="lname" id="lname" value="Ghazinyan"><br><br>
        <label for="email">E-Mail</label><input type="text"  id="email" name="email" placeholder="E-Mail" value="ghazinyan.abel@gmail.com"><br><br>
        <label>Birth Date</label><?php require "../view/templates/dateInput.php" ?><br><br>
        <style>#date { width:400px;padding:auto;float:right}</style>
        <label for="oldpswd">Old Password</label><input type="password"  id="oldpswd" name="oldpswd" placeholder="Old Password" value="12345678987654"><br><br>
        <label for="newpswd">New Password</label><input type="password"  id="newpswd"name="newpswd" placeholder="New Password"><br><br>
        <label for="cnfpswd">Confirm Password</label><input type="password" id="cnfpswd" name="cnfpswd" placeholder="Confirm New Password"><br><br>
        <label for="college">College</label><input type="text" id="college" name="college" placeholder="Enter College" value="Moscow State University"><br><br>
        <label for="highscl">High School</label><input type="text" id="highscl" name="highscl" placeholder="Enter High School" value="Physmath High School"><br><br>
        <label for="work">Work</label><input type="text" id="work" name="work" placeholder="Enter Work" value="Game Developer at TUMO"><br><br>
        <div class="centergender">
            <label for="male">Male</label> <input type="radio" id="male" name="gender" value="male" checked>
            <label for="female">Female</label><input type="radio" id="female" name="gender" value="female"><br>

        </div>
        <input class="submit" type="submit" value="Submit Changes">
        <br>
        <br>
    </form>
    </div>

</div>
</body>
</html>