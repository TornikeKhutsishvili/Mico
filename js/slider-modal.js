document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("contentModal");
    const modalTitle = document.getElementById("modalTitle");
    const modalSubtitle = document.getElementById("modalSubtitle");
    const modalText = document.getElementById("modalText");
    const modalImage = document.getElementById("modalImage");
    const closeModal = document.querySelector(".close-modal");

    document.querySelectorAll(".open-modal-btn").forEach(btn => {
    btn.addEventListener("click", function () {
        modalTitle.textContent = this.getAttribute("data-title");
        modalSubtitle.textContent = this.getAttribute("data-subtitle");
        modalText.textContent = this.getAttribute("data-text");
        modalImage.src = this.getAttribute("data-image");

        modal.style.display = "flex";
    });
    });

    closeModal.addEventListener("click", () => {
        modal.style.display = "none";
    });

    window.addEventListener("click", (e) => {
    if (e.target === modal) {
        modal.style.display = "none";
    }
    });
});
