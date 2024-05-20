

function clickLink(link) {
    const buttons = document.querySelectorAll(".nav2-link");
    buttons.forEach(link => {
        link.classList.remove("active");
    })

    link.classList.add("active");
}

document.addEventListener("DOMContentLoaded", () => {
    const firstlink = document.getElementById("firstlink");
    firstlink.click();
})