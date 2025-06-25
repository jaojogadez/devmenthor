const button = document.getElementById("playButton");
const content = document.querySelector(".container-sm");
const splashContainer = document.querySelector(".splash-animation");

button.onclick = () => startSplash();

function startSplash() {
  content.style.opacity = 0;
  showSplash();
}

function showSplash() {
  setTimeout(() => {
    content.style.display = "none";
    splashContainer.classList.add("active");
  }, 500);
  
  setTimeout(() => {
    location.href = "./src/views/login.html";
  }, 4000);
}
