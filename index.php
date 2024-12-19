
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
        } 
    else {
        $final_data = "$guest from $details->country living in $details->city";
        file_put_contents("visitors.txt", $final_data . "\n", FILE_APPEND);
        

    }
}
?>  
<div class="container">
    <div class="header">
      <p class="username">@inthecatsdreams</p>
      <img src="./lol.png" class="pfp-img">
    </div>
    <div class="content">
      <div class="intro">
        <p>Hello.</p>
        <p>I'm a 26 year old software developer, I started writing code when I was 12 year old, my first project was a cheat for a game written in C++ and I have been in love with programming ever since.
        <br>
        I know C++, C#, JavaScript, Lua and PHP.  
        <br>
          Outside of coding, I’m into anime, music, video games
        </p>
        
      </div>
      <div class="currently-learning">
        <h2>Currently Learning</h2>
        <p>I'm currently learning Zig for shit and giggles</p>
      </div>
      <div class="projects">
        <h2>Projects‧ (best ones imo)</h2>
        <ul>
          <li><a href="https://github.com/inthecatsdreams/PS3Lib" class="links">PS3Lib</a></li>
           <p><b>PS3Lib</b> is a C# library that allows you to write cheats for the PS3</p>
            
        </ul>
        <ul>
          <br>
         <li><a href="https://github.com/inthecatsdreams/vita-manager" class="links">Vita manager</a></li>    
          <p><b>Vita Manager</b> is an homebrew written in C for the PS Vita that allows you to do some rather complicated things with just the press of a button</p>
          </p>
          <li><a href="https://github.com/inthecatsdreams/vita-volume" class="links">Vita Volume</a></li>    
          <p><b>Vita-volume</b> is an application to set your vita volume level without using the volume buttons (useful if they are broken)</p>
          </p>
          <br>
          <li><a href="https://github.com/inthecatsdreams/XRPCLib" class="links">XRPCLib</a></li>    
          <p><b>XRPCLib</b> is a set of files written in C# to import in your projects to develop XBOX 360 RTE tools</p>
          </p>
          <br>
        </ul>
      </div>
        <h2>Links</h2>
       <a href="https://x.com/Eli56324893886" class="links">Twitter</a> |
       <a href="https://github.com/inthecatsdreams" class="links">GitHub</a> |
       <a href="https://steamcommunity.com/id/inthekotsdreams/" class="links">Steam</a> | 
       <a href="/download.php" class="links">Random shit to download</a> |
       <a href="/twdown.php" class="links">twitter video downloader </a> |
       <a href="/ytdown.php" class="links">youtube video downloader </a> 
    </div>
    
  </div>
  
</body>

</html>