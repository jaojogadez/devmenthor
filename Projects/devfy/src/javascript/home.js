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