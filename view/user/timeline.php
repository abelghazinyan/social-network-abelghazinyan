<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Timeline</title>
    <link rel = "stylesheet"
          type = "text/css"
          href = "../Styles/TimelineStyle.css" />
    <link rel = "stylesheet"
          type = "text/css"
          href = "../Styles/HeaderStyle.css" />
</head>
<body>
<div class="postContainer">
    <form method='post' enctype='multipart/form-data'>
        <input type='hidden' name='form' value='post'>
        <textarea name="text" class="textinput" placeholder="Say something"></textarea>
        <input type='file' name='file' id='file' class="fileinput"><br><br>
        <label for="file" class="upload">Upload Image</label>
        <input type='submit' value='Post' class="submit">
        <span style='color:crimson;font-size: 15px;float:left;margin-left:300px'></span>
    </form>
</div>
<?php require "../view/templates/header.php"?>

<div class="body">
    <?php Service\PostDrawer::drawTimeline(1,Service\PostDrawer::POST_COUNT) ?>
</div>
</body>
</html>
<script>
    var container = document.getElementsByClassName('body');
    var page = 1;
    window.onscroll = function(ev) {
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    container[0].innerHTML += this.responseText;
                }
            };
            page++;
            xhttp.open("GET", "../public/index.php?page=user&action=updatetimeline&id=" + page);
            xhttp.send();

        }
    };
</script>