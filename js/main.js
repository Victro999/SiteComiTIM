//---------- Common ----------//
function isMobile(){
    return navigator.userAgentData.mobile;
}

function screenWidth(){
    return isMobile()? screen.width : window.innerWidth;
}

//---------- Float ----------//
var floatingElements = document.getElementsByClassName("floating");
var floatingTimer = 0;
setInterval(() => {
    floatingTimer++;
    for (var i = 0; i < floatingElements.length; i++)
    {
        floatingElements[i].style.transform = `translate(-50%, ${-(50 + Math.sin(floatingTimer * 0.02))}%)`;
    }
}, 5);

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
    if (headerHidden)
    {
        header.classList.add("hide");
        expandBtn.innerHTML = "expand_more";
    }
    else
    {
        header.classList.remove("hide");
        expandBtn.innerHTML = "expand_less";
    }
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