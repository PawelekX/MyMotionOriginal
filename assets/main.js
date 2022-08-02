let $window = $(window);
let $document = $(document);
let $parallaxs = $(".parallax");

$document.ready(() => {
    parallax();
});

$(window).scroll(() => {
    parallax();
});

function parallax() {
    for(const el of $parallaxs) {
        $el = $(el);
        let ratio = ($document.scrollTop() - $el.position().top) / $el.height();

        if(ratio <= 1 || ratio > -1) {
            let y = -$el.height() * (ratio / 2);

            $el.css({
                backgroundPosition: `center ${y}px`
            });
        }
    }
}