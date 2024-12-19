<?php 
$ct = glob('*.CT');

if (isset($_SERVER['REMOTE_ADDR']) && !isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    
    $guest = $_SERVER['REMOTE_ADDR'];
    $details = json_decode(file_get_contents("http://ipinfo.io/{$guest}/json"));
        if ($details->country == "CN" || $details->country == "SG") {
            include_once 'banned.php';
    } 
else {
    $final_data = "$guest from $details->country living in $details->city";
    file_put_contents("visitors.txt", $final_data . "\n", FILE_APPEND);
    

}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="my shitty website">
    <link rel="stylesheet" href="style.css">
    <title>Random stuff to download</title>
</head>
<body>
<div class="container">

    cheat table for cheat engine i either found or made
<table>
  <tr>
    <th>File Name</th>
    <th>file size</th>
    <th>download</th>
  </tr>
  
  <?php
  for ($i=0; $i < count($ct); $i++) { 
    echo "<tr>";
    echo "<td>" . $ct[$i] . "</td>";
    echo "<td>" . filesize($ct[$i]) . " bytes" . "</td>";
    echo "<td>" . "<a href=" . $ct[$i] . ">Download </a>". "</td>";
    echo "</tr>";
}
  ?>
</table>
<br>
<br>
random stuff for various consoles
<table>
  <tr>
    <th>Filename</th>
    <th>file size</th>
    <th>download</th>

  </tr>
  <tr>
    <td>libdebug.dll</td>
    <td><?php echo filesize("./resources/libdebug.dll") . "bytes"?></td>
    <td><a href="./resources/libdebug.dll">Download</a></td>
  </tr>
  <tr>
    <td>PS4 Cheater</td>
    <td><?php echo filesize("./resources/PS4_Cheater.rar") . " bytes"?></td>
    <td><a href="./resources/PS4_Cheater.rar">Download</a></td>
  </tr>
  <tr>
    <td>Visual Studio 2010</td>
    <td><?php echo filesize("./resources/vs2010.iso") . " bytes"?></td>
    <td><a href="./resources/vs2010.iso"> Download</a></td>
  </tr>
  <tr>
    <td>XBOX 360 SDK</td>
    <td><?php echo filesize("./resources/XBOX360 SDK 21256.3.exe") . "  bytes"?></td>
    <td><a href="./resources/XBOX360_SDK_21256.exe ">Download</a></td>
  </tr>
  <tr>
    <td>PS4Debug.bin</td>
    <td><?php echo filesize("./resources/ps4debug.bin") . "  bytes"?></td>
    <td><a href="./resources/ps4debug.bin ">Download</a></td>
  </tr>
</table>


</div>
