/**
 *
 *  *
 * @licstart  The following is the entire license notice for the 
 *  JavaScript code in this page.
 *
 * Copyright (C) 2014  Loic J. Duros
 *
 *
 * The JavaScript code in this page is free software: you can
 * redistribute it and/or modify it under the terms of the GNU
 * General Public License (GNU GPL) as published by the Free Software
 * Foundation, either version 3 of the License, or (at your option)
 * any later version.  The code is distributed WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.
 *
 * As additional permission under GNU GPL version 3 section 7, you
 * may distribute non-source (e.g., minimized or compacted) forms of
 * that code without the copy of the GNU GPL normally required by
 * section 4, provided you include this license notice and a URL
 * through which recipients can access the Corresponding Source.
 *
 * @licend  The above is the entire license notice
 * for the JavaScript code in this page.
 *
 */

// the whole of text above is for my free software enthusiasts so GNU Icecat knows the script is safe and Free (as in freedom)

var randomNumber = Math.floor(Math.random() * (11 - 1)) + 1;
document.getElementById("randomMeme").innerHTML = `<img src="${randomNumber}.jpg">`;

/*document.onclick = function(){
    var audio = new Audio('fart.mp3');
    audio.play();
}*/

var sex = document.getElementById("randomMeme");
sex.onclick = function(){
    var randomMeme = Math.floor(Math.random() * (11 - 1)) + 1;
    sex.innerHTML = `<img src="${randomMeme}.jpg"> <br> click the picture for another random one`;
}

var background = document.getElementsByTagName("body")[0];
var backgroundButton = document.getElementById("backgroundAnime");
backgroundButton.onclick = function(){
    background.style.background = "none";
}