const form = document.querySelector("form");

form.onsubmit = (event) => {
  event.preventDefault();
  location.href = "./home.html";
};
