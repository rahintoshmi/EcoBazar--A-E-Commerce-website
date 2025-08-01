$.fn.counterUp = function () {
    function isElementInViewport(el) {
        var rect = el.getBoundingClientRect();
        return rect.top >= 0 && rect.bottom <= (window.innerHeight || document.documentElement.clientHeight);
    }

    function startCounter($this) {
        if ($this.hasClass('counted')) return; // Prevent running twice

        var target = parseInt($this.attr('data-target'));
        var duration = $this.data('duration') || 2000; // Default duration
        var steps = 50;
        var increment = target / steps;
        var interval = duration / steps;
        var count = 0;

        $this.addClass('counted'); // Add a flag to prevent multiple executions

        var counterInterval = setInterval(function () {
            count += increment;
            if (count >= target) {
                $this.text(target);
                clearInterval(counterInterval);
            } else {
                $this.text(Math.ceil(count));
            }
        }, interval);
    }

    function checkCounters(selector) {
        $(selector).each(function () {
            if (isElementInViewport(this)) {
                startCounter($(this));
            }
        });
    }

    // Attach event listeners
    var $this = this;
    $(window).on('scroll resize', function () {
        checkCounters($this);
    });

    checkCounters($this);

    return this;
};