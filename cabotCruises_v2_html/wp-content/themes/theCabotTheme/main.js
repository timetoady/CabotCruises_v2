//import anime from "/animejs/lib/anime.es.js";

const hamburger = document.querySelector("#menuIcon");
const navLinks = document.querySelector(".menuLinks");
const subLink = document.querySelector(".menu-item-has-children");
const subMenu = document.querySelector(".sub-menu");

//Main event handler for mobile menu
hamburger.addEventListener("click", () => {
  if (
    navLinks.classList.contains("default") ||
    navLinks.classList.contains("closed")
  ) {
    hamburger.setAttribute("name", "close");
    navLinks.classList.remove("closed");
    navLinks.classList.remove("default");
    navLinks.classList.add("opened");

    console.log("Opened");
  } else if (navLinks.classList.contains("opened")) {
    if (window.innerWidth <= 700) {
      hamburger.setAttribute("name", "menu");
      navLinks.classList.remove("opened");
      navLinks.classList.add("closed");
    }

    console.log("Closed");
  }
});

//Slider settings
$(document).ready(function () {
  $(".slider").slick({
    adaptiveHeight: true,
    arrows: false,
    lazyLoad: "ondemand",
    dots: true,
  });
});

//fixes menu stuck open on size change
window.onresize = function () {
  if (window.innerWidth >= 700) {
    navLinks.classList.remove("opened");
    navLinks.classList.remove("closed");
    navLinks.style.display = "block";
    hamburger.setAttribute("name", "close");
  } else {
    navLinks.classList.add("closed");
    navLinks.style.display = "none";
    hamburger.setAttribute("name", "menu");
  }
};

window.addEventListener('load', () => {
	subMenu.classList.add("close")
})

//Event handlers for submenu
subLink.addEventListener("click", () => {
	console.log("Sublink clicked!")
  if (subMenu.classList.contains("close")) {
    subMenu.classList.remove("close");
    subMenu.classList.add("open");
	  
//    subLink.textContent = "AGENTS▼";
  } else {
    subMenu.classList.remove("open");
    subMenu.classList.add("close");
	  
//    subLink.textContent = "AGENTS►";
  }
});
//
document.addEventListener("click", (event) => {
  const isClickInside = subLink.contains(event.target);
  const isClickInside2 = subMenu.contains(event.target);
  if (!isClickInside && !isClickInside2) {
    console.log("click outside!");
    subMenu.classList.remove("open");
    subMenu.classList.add("close");
//    subLink.textContent = "AGENTS►";
  }
});

