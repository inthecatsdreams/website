<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Dog shit website">
  <meta name="keywords" content="programming, tractors, xD">
  <meta name="author" content="inthecatsdreams">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="lol.png">
  <title>ilya's shithole</title>
  <link rel="stylesheet" href="style.css">

</head>

<body>
<?php

if (isset($_SERVER['REMOTE_ADDR']) && !isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {

    $guest = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$guest}/json"));
    if ($details->country == "CN" || $details->country == "SG" || $details->country == "HK") {
        include_once 'banned.php';
    } else {
        $final_data = "$guest from $details->country living in $details->city";
        file_put_contents("visitors.txt", $final_data . "\n", FILE_APPEND);

    }
}

?>
<div clas="container">
<div class="container">
        <button id="backgroundAnime">Disable background image</button>
        <fieldset>
            <legend>Download your shit here</legend>
            <form action="ytdown.php" method="post">
    <label >youtube video url</label>
    <input type="text" name="url" id="url">
    <input type="submit" value="Download">        
            <?php
    if(isset($_POST["url"]) && str_starts_with($_POST["url"], "https://you") || isset($_POST["url"]) && str_starts_with($_POST["url"], "https://www.you")) {
        $url = $_POST["url"];
        $fuck = time();
        $command = "yt-dlp -o '" . $fuck . ".%(ext)s'" . " " . $url;
        exec($command);
        $file = glob($fuck . ".*");
        if(count($file) == 1){
            echo "<br>your file is available  <a href='./" . $file[0] . "' download>here</a>";
        }
        else
        {
            echo "<br><p id='error'> couldnt download your file</p>";
        }
        
    }
    else if (isset($_POST["url"]) && !str_starts_with($_POST["url"], "https://www.you") || isset($_POST["url"]) && !str_starts_with($_POST["url"], "https://.you")) {
        echo "<br><p id='error'> make sure its a valid link to youtube </p>";
    }
    ?>    
    </form>
    <button id="backgroundAnime">remove bg</button>
    <div id="randomMeme"></div>
</fieldset>
</div>
<script src="poop.js"></script>
</body>
</html>