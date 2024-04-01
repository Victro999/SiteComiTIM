//---------- Transitions ----------//
var speed = 0.2;
window.addEventListener("DOMContentLoaded", (e) => {
    var body = document.body;
    var height =
        body.scrollHeight > window.innerHeight
            ? body.scrollHeight
            : window.innerHeight;
    var radius = Math.sqrt(
        Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2)
    );
    body.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
    body.style.transitionDuration = `${radius * speed}ms`;
    window.addEventListener("transitionend", (e) => {
        body.style.clipPath = "none";
    });
});
function UnloadHandler() { window.removeEventListener('unload', UnloadHandler, false); }
window.addEventListener('unload', UnloadHandler, false);

function changePage(href) {
    var transition = document.getElementById("transition");
    var height = window.innerHeight;
    var radius = Math.sqrt(
        Math.pow(height, 2) + Math.pow(window.innerWidth / 2, 2)
    );
    transition.style.clipPath = `ellipse(${radius}px ${radius}px at 50% 0)`;
    transition.style.transitionDuration = `${radius * speed}ms`;
    transition.addEventListener("transitionend", (e) => {
        window.location = href;
    });
}

//---------- Header ----------//
var headerHidden = true;
var header = document.getElementsByTagName("header")[0];
var expandBtn = document.querySelector("#expand span");
function showHeader() {
    headerHidden = !headerHidden;
    headerHidden
        ? header.classList.add("hide")
        : header.classList.remove("hide");
    expandBtn.innerHTML = headerHidden ? "expand_more" : "expand_less";
}

function setCurrentPage(id) {
    var nav = document.querySelector("nav.main");
    var buttons = nav.querySelectorAll("li button");
    buttons[id].classList.add("currentPage");
}

//---------- Games ----------//
function startGame(gameID) {
    var div = document.querySelector(`#${gameID}`);
    var img = div.querySelector(`img`);
    img.style.display = "none";
    var iframe = div.querySelector(`iframe`);
    iframe.src = iframe.getAttribute("game-src");
    var button = div.querySelector(`button`);
    button.style.display = "none";
}
function fullscreen(gameID) {
    var div = document.querySelector(`#${gameID}`);
    if (div.classList.contains("fullscreen")) div.classList.remove("fullscreen");
    else 
    {
        div.classList.add("fullscreen");
        window.addEventListener("keydown", e => {
            if (e.key = "esc") div.classList.remove("fullscreen");
        }, {once: true})
    }
}