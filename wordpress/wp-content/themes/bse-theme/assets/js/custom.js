jQuery(document).ready(function($) {
    // Event Filter Functionality
    $('.filter-btn').on('click', function() {
        const filterValue = $(this).data('filter');
        
        // Update active state
        $('.filter-btn').removeClass('active');
        $(this).addClass('active');
        
        // Show/hide events based on filter
        if (filterValue === 'all') {
            $('.event-card').show();
        } else {
            $('.event-card').hide();
            $('.event-card[data-type="' + filterValue + '"]').show();
        }
    });

    // Smooth Scroll to Sections
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
            && 
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            
            if (target.length) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 100
                }, 1000);
            }
        }
    });

    // Mobile Menu Toggle
    $('.menu-toggle').on('click', function() {
        $('.main-navigation').toggleClass('mobile-menu-active');
        $(this).toggleClass('active');
    });

    // Fixed Header on Scroll
    var header = $('.site-header');
    var headerOffset = header.offset().top;

    $(window).scroll(function() {
        if ($(window).scrollTop() > headerOffset) {
            header.addClass('fixed-header');
        } else {
            header.removeClass('fixed-header');
        }
    });

    // Initialize Bootstrap Tooltips
    $('[data-bs-toggle="tooltip"]').tooltip();

    // Form Validation Enhancement
    $('form').each(function() {
        $(this).on('submit', function() {
            var form = $(this);
            var isValid = true;

            form.find('input[required], textarea[required]').each(function() {
                if (!$(this).val()) {
                    isValid = false;
                    $(this).addClass('is-invalid');
                } else {
                    $(this).removeClass('is-invalid');
                }
            });

            return isValid;
        });
    });

    // Dynamic Year in Footer
    $('.current-year').text(new Date().getFullYear());

    // News Card Image Loading Animation
    $('.news-card img').on('load', function() {
        $(this).addClass('loaded');
    });

    // Feature Card Hover Effect
    $('.feature-card').hover(
        function() {
            $(this).find('h3').addClass('text-hover');
        },
        function() {
            $(this).find('h3').removeClass('text-hover');
        }
    );

    // Add loading state to buttons when clicked
    $('button[type="submit"]').on('click', function() {
        var $btn = $(this);
        if (!$btn.hasClass('loading')) {
            $btn.addClass('loading').prop('disabled', true);
            $btn.data('original-text', $btn.text());
            $btn.html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...');
        }
    });

    // Reset button state when form submission is complete
    $(document).ajaxComplete(function() {
        var $btn = $('button.loading');
        if ($btn.length) {
            $btn.removeClass('loading').prop('disabled', false);
            $btn.text($btn.data('original-text'));
        }
    });
});