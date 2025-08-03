const items = document.querySelectorAll(".cover-item");

items.forEach((item) => {
  item.onclick = () => sendToPlayerView();
});

function sendToPlayerView() {
  location.href = "./player.html";
}

document.querySelector(".btn-logout").addEventListener("click", () => {
  location.href = "../../index.html";
})

const sidebar = document.getElementById("sidebar");
const toggleBtn = document.getElementById("toggle-btn");
const toggleIcon = document.querySelector("#toggle-btn i");

toggleBtn.addEventListener("click", () => {
  sidebar.classList.toggle("expand");
  toggleIcon.textContent = sidebar.classList.contains("expand") ? "keyboard_double_arrow_left" : "keyboard_double_arrow_right";
});
