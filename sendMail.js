$document.ready(function() {
    $("#contactForm").on("submit", function(e) {
        e.preventDefault();
        
        const data = $('#contactForm').serialize();  
        console.log(data);
        $.ajax({
            url  : "sendMail.php",
            type : "POST",
            cache:false,
            data :data,
            success: function(html) {
                $('#feedback').html(html);
            }
        }); return false;
    });
});