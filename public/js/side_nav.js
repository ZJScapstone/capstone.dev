$(document).ready(function() {
    $(".button-collapse").sideNav();
    $(".collapsible").collapsible();
    $(".button-collapse").sideNav('show');
    $(".button-collapse").sideNav('hide');

    // icon click
    $('ul#nav-mobile li.search .search-wrapper i.material-icons').click(function() {
        if ($('.search-results .focused').length) {
            $('.search-results .focused').first()[0].click();
        } else if ($('.search-results').children().length) {
            $('.search-results').children().first()[0].click();
        }
    });

    $('input#search').focus(function() {
        $(this).parent().addClass('focused');
    });

    $('input#search').blur(function() {
        if (!$(this).val()) {
            $(this).parent().removeClass('focused');
        }
    });

    //$('.datepicker').pickadate({
    //    selectMonths: true,
    //    selectYears: 5
    //});
});
