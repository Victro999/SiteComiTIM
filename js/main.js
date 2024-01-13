function isMobile(){
    return navigator.userAgentData.mobile;
}

function screenWidth(){
    return isMobile()? screen.width : window.innerWidth;
}

//---------- Transitions ----------//
var speed = 0.5;
window.addEventListener("load", e => {
    var body = document.body;
    var height = body.scrollHeight > window.innerHeight? body.scrollHeight : window.innerHeight;
    var radius = Math.sqrt(Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2));
    body.style.transitionDuration = `${radius * speed}ms`
    body.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
})

function changePage(href) {
    var transition = document.getElementById("transition");
    var height = window.innerHeight;
    var radius = Math.sqrt(Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2));
    transition.style.transitionDuration = `${radius * speed}ms`
    transition.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
    transition.addEventListener("transitionend", e => {
        window.location = href;
    })
}

//---------- Navigation ----------//
var contentProjets = document.querySelectorAll("#projets > div");
var contentActivites = document.querySelectorAll("#activites > div");
var btnsProjets = document.querySelectorAll("#liste-projets button");
var btnsActivites = document.querySelectorAll("#liste-activites button");
function switchContent(page, ID)
{
    var content = page === 0? contentProjets : contentActivites;
    var btns = page === 0? btnsProjets : btnsActivites;

    for (var i = 0; i < content.length; i++)
    {
        if (i === ID) content[i].style.display = "block";
        else content[i].style.display = "none";        
    }

    for (var i = 0; i < btns.length; i++)
    {
        if (i + 1 === ID) btns[i].classList.add("currentContent");
        else btns[i].classList.remove("currentContent");
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
function gameBtn(gameName)
{
    var iframe = document.querySelector(`#${gameName} iframe`);
    var img = iframe.parentElement.getElementsByTagName("img")[0];
    var span = document.querySelector(`#${gameName} span`);
    if (span.innerHTML === "play_arrow")
    {
        iframe.src = `games/${gameName}/${gameName}.html`;
        img.style.display = "none";
        span.innerHTML = "pause";
    }
    else
    {
        iframe.src = "";
        img.style.display = "block";
        span.innerHTML = "play_arrow";
    }
}