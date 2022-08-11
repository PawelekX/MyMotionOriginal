let $window = $(window);
let $document = $(document);
let $parallaxs = $(".parallax");
const isMobile = navigator.userAgentData.mobile;

window.onload = function() {
    const loadingAlert = document.getElementById("loading");
    setTimeout(() => { 
        loadingAlert.style.display = "none";
    }, 1000);
   }

$document.ready(() => {
    parallax();
});

$(window).scroll(() => {
   if(!isMobile) parallax();
});

function parallax() {
    for(const el of $parallaxs) {
        $el = $(el);
        let ratio = ($document.scrollTop() - $el.position().top) / $el.height();

        if(ratio <= 1 || ratio > -1) {
            let y = -$el.height() * (ratio / 2);

            $el.css({
                backgroundPosition: `center ${y}px`,
                backgroundAttachment: (isMobile) ? "scroll" : "fixed"
            });
        }
    }
}