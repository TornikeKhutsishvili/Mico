document.addEventListener("DOMContentLoaded", function () {
    const buttons = document.querySelectorAll(".toggle-btn");

    buttons.forEach(button => {
    button.addEventListener("click", function (e) {
        e.preventDefault();
        const description = this.previousElementSibling;
        description.classList.toggle("expanded");

        this.textContent = description.classList.contains("expanded") ? "Read Less" : "Read More";
    });
    });
});

