/*==============================================================*/
// Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    var sendContactFormUrl = "{{ route('sendContactForm') }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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


    function submitForm(){
        // Initiate Variables With Form Content
        var name = $("#name").val();
        var email = $("#email").val();
        var msg_subject = $("#msg_subject").val();
        var phone_number = $("#phone_number").val();
        var message = $("#message").val();

        // Afficher une indication visuelle d'envoi du message
        $("#msgSubmit").removeClass().addClass("h4 text-left text-info").text("Envoi en cours...");

        // Ajouter les points de suspension
        var dots = "";
        var interval = setInterval(function() {
            dots += ".";
            $("#msgSubmit").text("Envoi en cours" + dots);
            if (dots.length === 3) {
                dots = "";
            }
        }, 500);

        $.ajax({
            type: "POST",
            url: "contact",
            data: "name=" + name + "&email=" + email + "&phone_number=" + phone_number + "&msg_subject=" + msg_subject + "&message=" + message,
            success : function(text){
                clearInterval(interval); 
                if (text == "success"){
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false,text);
                }
            },
            error: function (xhr, status, error) {
                clearInterval(interval); // Arrêter les points de suspension
                formError();
                submitMSG(false, "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer.");
            }
        });
    }

    function formSuccess(){
        $("#contactForm")[0].reset();
        submitMSG(true, "Votre message a été envoyé avec succès ! Merci de nous avoir contactés.")
    }

    function formError(){
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg){
        if(valid){
            var msgClasses = "h4 text-left tada animated text-success";
        } else {
            var msgClasses = "h4 text-left text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery)); // End of use strict