//---------- Transitions ----------//
var speed = 0.3;
window.addEventListener("load", e => {
    var body = document.body;
    var height = body.scrollHeight > window.innerHeight? body.scrollHeight : window.innerHeight;
    var radius = Math.sqrt(Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2));
    body.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
    body.style.transitionDuration = `${radius * speed}ms`
    window.addEventListener("transitionend", e => {
        body.style.clipPath = "none";
    })
})

function changePage(href) {
    var transition = document.getElementById("transition");
    var height = window.innerHeight;
    var radius = Math.sqrt(Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2));
    transition.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
    transition.style.transitionDuration = `${radius * speed}ms`;
    transition.addEventListener("transitionend", e => {
        window.location = href;
    })
}

//---------- Navigation ----------//
var contentProjets = document.querySelectorAll("main > div");
var btnsProjets = document.querySelectorAll("nav.secondary button");
function switchContent(ID)
{
    for (var i = 0; i < contentProjets.length; i++)
    {
        if (i === ID) contentProjets[i].style.display = "block";
        else contentProjets[i].style.display = "none";        
    }

    for (var i = 0; i < btnsProjets.length; i++)
    {
        if (i + 1 === ID) btnsProjets[i].classList.add("currentContent");
        else btnsProjets[i].classList.remove("currentContent");
    }
}

var headerHidden = true;
var header = document.getElementsByTagName("header")[0];
var expandBtn = document.querySelector("#expand span");
function showHeader()
{
    headerHidden = !headerHidden;
    headerHidden? header.classList.add("hide") : header.classList.remove("hide");
    expandBtn.innerHTML = headerHidden? "expand_more" : "expand_less";
}

//---------- Games ----------//
var gameFrames = document.querySelectorAll(".jeu iframe");
gameFrames.forEach(frame => {
    frame.addEventListener("load", e => {
        var link = document.createElement("link");
        // <link rel="stylesheet" href="css/style.css" />
        link.rel = "stylesheet";
        link.href = "../../../css/games.css";
        e.target.contentDocument.head.appendChild(link);
    })
});

function startGame(gameName)
{
    var iframe = document.querySelector(`#${gameName} iframe`);
    var button = document.querySelector(`#${gameName} button`);
    iframe.src = `database/games/${gameName}/${gameName}.html`;
    button.style.display = "none";
}