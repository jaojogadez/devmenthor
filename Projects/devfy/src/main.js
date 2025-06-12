const button = document.getElementById("playButton");
const content = document.querySelector(".container-sm");
const splashAnimation = document.querySelector(".splash-animation");

button.onclick = () => startSplash();

function startSplash() {
  content.style.opacity = 0;
  showSplash();
}

function showSplash() {
  setTimeout(() => {
    content.style.display = "none";
    splashAnimation.classList.add("active");
  }, 500);
}
