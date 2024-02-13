const sldtEl = document.querySelector(".sldt");
const sldtEl1 = document.querySelector(".sldt1");
const sldtEl2 = document.querySelector(".sldt2");
const sldtEl3 = document.querySelector(".sldt3");
const sldtEl4 = document.querySelector(".sldt4");
var classZoomActiv = false;

const careers = ["I am Full Stack Web Developer."];
const careers3 = [
  "Fast load times and lag free interaction, my highest priority.",
];
const careers1 = ["My layouts will work on any device, big or small."];
const careers2 = ["Strong preference for easy to use, intuitive UX/UI."];
const careers4 = [
  "Websites don't have to be static, I love making pages come to life.",
];

let careerIndex = 0;

let characterIndex = 0;

updateText();

//updateText2();
//updateText3();

function updateText() {
  characterIndex++;
  sldtEl.innerHTML = ` ${careers[careerIndex].slice(0, characterIndex)}`;

  sldtEl1.innerHTML = `${careers1[careerIndex].slice(0, characterIndex)}`;

  sldtEl2.innerHTML = `${careers2[careerIndex].slice(0, characterIndex)}`;

  sldtEl3.innerHTML = `${careers3[careerIndex].slice(0, characterIndex)}`;

  sldtEl4.innerHTML = `${careers4[careerIndex].slice(0, characterIndex)}`;

  if (characterIndex === careers4[careerIndex].length) {
    careerIndex++;
    characterIndex = 0;
  }

  //if (careerIndex === careers.length) {
  // careerIndex = 0;
  //}

  setTimeout(updateText, 80);
}

const btnEl = document.querySelector(".btn");

const containerEl = document.querySelector(".certif_blur");

const popupContainerEl = document.querySelector(".popup-container");

const closeIconEl = document.querySelector(".close-icon");
const popupPicEl = document.querySelector(".popup_pic");

btnEl.addEventListener("click", () => {
  containerEl.classList.add("active");
  popupContainerEl.classList.remove("active");
});

closeIconEl.addEventListener("click", () => {
  containerEl.classList.remove("active");
  popupContainerEl.classList.add("active");
  popupContainerEl.classList.remove("zoom");
  classZoomActiv = false;
});

popupPicEl.addEventListener("click", () => {
  if (classZoomActiv === false) {
    popupContainerEl.classList.add("zoom");
    classZoomActiv = true;
  } else if (classZoomActiv === true) {
    popupContainerEl.classList.remove("zoom");
    classZoomActiv = false;
  }
});

var year = document.getElementById("year");

year.innerHTML = new Date().getFullYear();
