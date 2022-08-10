$document.ready(function() {
    $("#contactForm").on("submit", function(e) {
        e.preventDefault();
        
        const data = $('#contactForm').serialize();
        $.ajax({
            url  : "sendMail.php",
            type : "POST",
            cache: false,
            data : data,
            success: function() {
                const successNotification = document.getElementById('success');
                successNotification.style.display="flex";
                
                setTimeout(() => {
                    successNotification.style.display="none";
                  }, 5000);
                document.getElementById("contactForm").reset();
            },
            error: function() {
               const errorNotification =  document.getElementById('error');
               errorNotification.style.display="flex";
               
                setTimeout(() => {
                    errorNotification.style.display="none";
                }, 5000);
            }
        });
        return false;
    });
});