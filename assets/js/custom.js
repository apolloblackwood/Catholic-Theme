$(document).ready(function() {
    // Toggle church details when clicking the church title
    $('.church-item').click(function() {
        $(this).find('.church-details').slideToggle();
        $(this).toggleClass('active');
    });
});