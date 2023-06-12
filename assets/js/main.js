//List prestation

let prestationIcon = ["fa-oil-can", "fa-car-battery", "fa-gauge-simple", "fa-truck-monster", "fa-spray-can-sparkles"]
let prestation = ["Vidange", "Batterie", "Moteur", "Pneus", "Carrosserie"];
let prestationDetails = [["Remplacement huile moteur", "Remplacement filtre à huile", "Remplacement Bouchon vidange"], ["Remplacement batterie", "Remplacement démarreur"], ["Remplacement bougies", "Remplacement du filtre à air", "Remplacement injecteur"], ["Changements pneus", "Parallélisme", "Equilibrage"], ["Nettoyage à sec", "Peinture"]];

let wrapperPrestation = document.getElementById("listPrestation");
let wrapperPrestationHTML = '';

for (let i = 0; i < prestation.length; i++) {
    wrapperPrestationHTML += '<div class="col-md-6 col-sm-12 mb-4 category"><div class="row"><div class="col-auto mb-4"><h3 class="title"><i class="fas ' +
        prestationIcon[i] + ' me-3"></i>' +
        prestation[i] + '</h3><ul class="mt-2 mt-1 pl-0">'

    for (let j = 0; j < prestationDetails[i].length; j++) {

        wrapperPrestationHTML += '<h4 class="title m-0"><li>' + prestationDetails[i][j] + '</h4></li>';
    }
    wrapperPrestationHTML += '</ul></div></div></div>'
}

wrapperPrestation.innerHTML = wrapperPrestationHTML

///////////////////////////////////////////////////////////////////

// Contact Form
$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm() {
    // Initiate Variables With Form Content
    var name = $("#name").val();
    var firstname = $("#firstname").val();
    var email = $("#email").val();
    var number = $("#number").val();
    var message = $("#message").val();

    $.ajax({
        type: "POST",
        url: "includes/ContactForm.php",
        data: "name=" + name + "firstname=" + firstname + "&email=" + email + "number=" + number + "&message=" + message,
        success: function (text) {
            if (text == "success") {
                formSuccess();
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "Message envoyé!")
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}



///////////////////////////////////////////////////////////////////