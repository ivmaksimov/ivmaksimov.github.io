const btnEl = document.querySelector(".btn");

const containerEl = document.querySelector(".container");

const popupContainerEl = document.querySelector(".popup-container");

const closeIconEl = document.querySelector(".close-icon");

const popupBtn = document.querySelector(".popup-btn");

const input = document.querySelector(".input");

const message = document.querySelector(".message_email");

btnEl.addEventListener("click", () => {
  containerEl.classList.add("active");
  popupContainerEl.classList.remove("active");
});

closeIconEl.addEventListener("click", () => {
  containerEl.classList.remove("active");
  popupContainerEl.classList.add("active");
});

popupBtn.addEventListener("click", () => {
  if (input && input.value) {
    validateEmail(input.value);
    if (validateEmail(input.value) == true) {
      containerEl.classList.remove("active");
      popupContainerEl.classList.add("active");
      message.innerHTML = "";
      input.value = "";
    } else {
      message.innerHTML = "Please enter a valid email";
    }
  } else {
    message.innerHTML = "Please Enter Email";
  }
});

function validateEmail(email) {
  var re = /\S+@\S+\.\S+/;
  return re.test(email);
}
