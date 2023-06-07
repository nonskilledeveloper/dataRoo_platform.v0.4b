let miImagen = document.getElementById("img-q");
let milkyguidelines = document.getElementById("guidelines-link");
let overlay = document.getElementById("overlay");
let milkytitle = document.getElementsByClassName("overlay-text");
let milkyform = document.getElementById("overlay-form");
let milkylinks = document.getElementsByClassName("search-link");

miImagen.addEventListener("click", function(){
milkytitle[0].classList.toggle("milkytext-blur");
milkytitle[1].classList.toggle("milkytext-blur");
milkyguidelines.classList.toggle("milkytext-blur");
milkyform.classList.toggle("milkyform-blur");
milkylinks[0].classList.toggle("milkylinks-blur");
milkylinks[1].classList.toggle("milkylinks-blur");
overlay.classList.toggle("overlay-active");
miImagen.classList.toggle("img-q");
});