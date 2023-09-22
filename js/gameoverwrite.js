var canvas = document.getElementById("unity-canvas");
canvas.style.borderRadius = "1em";

var style = document.head.appendChild(document.createElement("style"));
style.innerHTML = "@import url('https://fonts.googleapis.com/css2?family=Kanit:wght@100;400;600&display=swap')";
var title = document.getElementById("unity-build-title");
title.style.fontFamily = "\"Kanit\", sans-serif";
title.style.fontSize = "2em";