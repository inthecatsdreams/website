<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dog shit website">
  <meta name="keywords" content="programming, tractors, xD">
  <meta name="author" content="inthecatsdreams">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="ilya.jpg">
  <title>Download twitter crap</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
        <button id="backgroundAnime">Disable background image</button>
        <fieldset>
            <legend>Download your shit here</legend>
            <form action="twdown.php" method="post">
    <label >twitter video url</label>
    <input type="text" name="url" id="url">
    <input type="submit" value="Download">

    <?php
if (isset($_POST["url"]) && str_starts_with($_POST["url"], "https://x")) {
    $url = $_POST["url"];
    $fileName = time();
    $command = "yt-dlp -o '" . $fileName . ".%(ext)s'" . " " . $url;
    exec($command);
    if (file_exists($fileName . ".mp4")) {
        echo "<p>your file is available at <a href='" . $fileName . ".mp4" . "' download> the following URL </a></p>";
    } else if (isset($_POST["url"]) && !str_starts_with($_POST["url"], "https://x")) {
        echo "<p id='error'>This is for twitter only</p>";

    } else {
        echo "<p id='error'>Make sure it's a valid link to a twitter video.";
    }
}
?>
</form>
</fieldset>
</div>
<script src="poop.js"></script>
</body>
</html>