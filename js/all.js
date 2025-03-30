// cursor effect 50


// Create multiple cursor lines for a layered effect
const numLines = 4;
const cursorLines = [];

for (let i = 0; i < numLines; i++) {
    const line = document.createElement("div");
    line.classList.add("cursor-line");
    document.body.appendChild(line);
    cursorLines.push(line);
}

let lastX = 0, lastY = 0;

// Track cursor movement
document.addEventListener("mousemove", (e) => {
    const x = e.clientX;
    const y = e.clientY;
    
    cursorLines.forEach((line, index) => {
        setTimeout(() => {
            const deltaX = x - lastX;
            const deltaY = y - lastY;
            const distance = Math.sqrt(deltaX * deltaX + deltaY * deltaY);

            line.style.width = `${distance}px`;
            line.style.left = `${lastX}px`;
            line.style.top = `${lastY}px`;

            // Rotate line towards cursor movement direction
            const angle = Math.atan2(deltaY, deltaX) * (180 / Math.PI);
            line.style.transform = `rotate(${angle}deg)`;

            lastX = x;
            lastY = y;
        }, index * 50); // Delay each line for a trailing effect
    });
});

// Hide cursor lines when mouse is not moving
let timeout;
document.addEventListener("mousemove", () => {
    cursorLines.forEach(line => line.style.opacity = "1");
    clearTimeout(timeout);
    timeout = setTimeout(() => {
        cursorLines.forEach(line => line.style.opacity = "0");
    }, 500); // Hide after 500ms of inactivity
});




// while click contact in nav bar

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".nav-link[href='#contact']").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default anchor behavior
        document.getElementById("contact").scrollIntoView({
            behavior: "smooth"
        });
    });
});