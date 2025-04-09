// while click contact in nav bar

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".nav-link[href='#contact']").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default anchor behavior
        document.getElementById("contact").scrollIntoView({
            behavior: "smooth"
        });
    });
});