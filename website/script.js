document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("contact-form");
    const responseText = document.getElementById("response-text");

    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Prevent form submission

        // Fetch form data
        const formData = new FormData(form);
        
        // Perform some validation if needed
        
        // Simulate form submission (you can replace this with an actual API call)
        setTimeout(function () {
            responseText.textContent = "Form submission success!";
            form.reset();
        }, 1000);
    });
});
//find alert in javascript//