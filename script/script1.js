const openFormButton = document.getElementById("openForm");
        const closeFormButton = document.getElementById("closeForm");
        const formContainer = document.getElementById("formContainer");

        openFormButton.addEventListener("click", () => {
            formContainer.style.display = "block";
        });

        closeFormButton.addEventListener("click", () => {
            formContainer.style.display = "none";
});
