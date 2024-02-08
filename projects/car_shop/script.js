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
    
  <div class="col-lg-7 col-md-8 col-sm-9">
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

var cardDetails = document.getElementsByClassName("cardDetails");

for (let i = 0; i < cardDetails.length; i++) {
  cardDetails[i].addEventListener("click", function () {
    document.getElementById("details").innerHTML = moreDetails(i);
    const visibility = nav.getAttribute("data-visible");
    if (visibility === "false") {
      nav.setAttribute("data-visible", true);
    }
  });
}

const nav = document.getElementById("slider");
const toggle = document.getElementById("xbtn");

toggle.addEventListener("click", () => {
  const visibility = nav.getAttribute("data-visible");

  if (visibility === "true") {
    nav.setAttribute("data-visible", false);
  }
});
