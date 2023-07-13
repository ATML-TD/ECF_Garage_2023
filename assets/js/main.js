// Contact Form

function submitContactForm(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var name = $('#name').val();
    var firstname = $('#firstname').val();
    var email = $('#email').val();
    var number = $('#number').val();
    var message = $('#message').val();
    if(name.trim() == '' ){
        alert('Veuillez entrer votre nom.');
        $('#name').focus();
        return false;
    }else if(firstname.trim() == '' ){
        alert('Veuillez entrer votre prénom.');
        $('#firstname').focus();
        return false;
    }else if(email.trim() == '' ){
        alert('Veuillez entrer votre email.');
        $('#email').focus();
        return false;
    }else if(email.trim() != '' && !reg.test(email)){
        alert('Veuillez entrer un email valide.');
        $('#email').focus();
        return false;
    }else if(number.trim() == '' ){
        alert('Veuillez entrer un numéro.');
        $('#number').focus();
        return false;
    }else if(message.trim() == '' ){
        alert('Veuillez entrer un message.');
        $('#message').focus();
        return false;
    }else{
        $.ajax({
            type:'POST',
            url:'includes/ContactForm.php',
            data:'contactFrmSubmit=1&name='+name+'&firstname='+firstname+'&email='+email+'&number='+number+'&message='+message,
            beforeSend: function () {
                $('.submitBtn').attr("disabled","disabled");
                $('.modal-body').css('opacity', '.5');
            },
            success:function(msg){
                alert("Merci pour votre message, nous reviendrons vers vous au plus vite!");
            }
        });
    }
}

//////////////////////////////////////////////////////////////////////////////////

