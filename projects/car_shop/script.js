var arr = JSON.parse(cars);

for (let value of arr) {
  document.getElementById("result").innerHTML += `
    <div id="card"  class="card card1 cardDetails m-2" style=" border:none">
    <img src="${value.img}" class="card-img-top" alt="${value.name}">
    <div class="card-body">
      <h5 class="card-title">${value.name}, ${value.production_year}</h5>
      <p class="card-text">${value.car_price} <br> ${value.color} <br> ${value.transmission}</p>
    </div>
  </div>
    `;
}

function moreDetails(index) {
  return `
    
  <div style="width:100%" class="col-lg-7 col-md-8 col-sm-9">
  <div  class="card cardDetails m-2">
  
  <img src="${arr[index].img}" class="card-img-top" alt="${arr[index].name}">
  <div class="card-body">
  <h5 class="card-title">${arr[index].name}, ${arr[index].production_year}</h5>
  <p class="card-text">${arr[index].car_price} <br> ${arr[index].color} <br> ${arr[index].transmission}</p>
  </div>
  </div>
  </div>
  `;
}
var nav = document.getElementById("slider");

var cardDetails = document.getElementsByClassName("cardDetails");

for (let i = 0; i < cardDetails.length; i++) {
  cardDetails[i].addEventListener("click", function () {
    document.getElementById("details").innerHTML = moreDetails(i);
    var visibility = nav.getAttribute("data-visible");
    console.log(visibility);

    if (visibility === "false") {
      nav.setAttribute("data-visible", true);
    }
    var toggle = document.getElementById("xbtn");
    var display = toggle.style.display;
    if (display == "none") {
      toggle.style.display = "flex";
    }
  });
}

toggle = document.getElementById("xbtn");
toggle.addEventListener("click", () => {
  document.getElementById("details").innerHTML = "";
  var toggle = document.getElementById("xbtn");
  var display = toggle.style.display;
  if (display == "flex") {
    toggle.style.display = "none";
  }
});

var year = document.getElementById("year");

year.innerHTML = new Date().getFullYear();
