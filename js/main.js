//---------- Common ----------//
function isMobile(){
    return navigator.userAgentData.mobile;
}

function screenWidth(){
    return isMobile()? screen.width : window.innerWidth;
}

window.addEventListener("resize",debounce(function(e){
    switchPage(currentPageID);
}));

function debounce(func){
    var timer;
    return function(event){
      if(timer) clearTimeout(timer);
      timer = setTimeout(func,100,event);
    };
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
var main = document.getElementById("main");
const navBtns = document.querySelectorAll("nav button");
var listeProjets = document.getElementById("liste-projets");
var listeActivites = document.getElementById("liste-activites");
var currentPageID;
function switchPage(ID)
{
    currentPageID = ID;
    main.style.right = ID * screenWidth() + "px";
    for (var i = 0; i < navBtns.length; i++)
    {
        if (i + 1 === ID) navBtns[i].classList.add("currentPage");
        else navBtns[i].classList.remove("currentPage");
    }

    if (ID === 1) listeProjets.classList.remove("hide");
    else listeProjets.classList.add("hide");

    if (ID === 2) listeActivites.classList.remove("hide");
    else listeActivites.classList.add("hide");
}

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
function gameBtn(name)
{
    var iframe = document.querySelector(`#${name} iframe`);
    var img = iframe.parentElement.getElementsByTagName("img")[0];
    var span = document.querySelector(`#${name} span`);
    if (span.innerHTML === "play_arrow")
    {
        iframe.src = `games/${name}/${name}.html`;
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

function loadGame(name)
{
    var iframe = document.querySelector(`#${name} iframe`);
    iframe.src = `games/${name}/${name}.html`;
    iframe.parentElement.getElementsByTagName("img")[0].style.display = "none";
    document.querySelector(`#${name} span`).innerHTML = "pause";
}

function unloadGame(name)
{
    var iframe = document.querySelector(`#${name} iframe`);
    iframe.src = "";
    iframe.parentElement.getElementsByTagName("img")[0].style.display = "block";
    document.querySelector(`#${name} span`).innerHTML = "play_arrow";
}