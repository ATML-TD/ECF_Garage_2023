// Contact Form
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Avez-vous bien rempli le formulaire?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});



//////////////////////////////////////////////////////////////////////////////////

