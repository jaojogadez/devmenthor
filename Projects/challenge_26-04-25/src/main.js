document.querySelectorAll(".material-icons")[0].onclick = () => {
    document.querySelector(".sidebar").classList.add("show-sidebar");
};
document.querySelectorAll(".material-icons")[1].onclick = () => {
    document.querySelector(".sidebar").classList.remove("show-sidebar");
};