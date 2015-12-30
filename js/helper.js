function activeTrail(className) {//highlights the current menu
    var string = 'a[href^=' + className + ']';
    $(string).addClass('active-trail active');
    $(string).parent().addClass('active-trail active');
}
function pageInfo(pageTitle) {
    $('#page-title').html(pageTitle);
    $('#title-href').html(pageTitle).attr('href', pageTitle + '.php');
}

jQuery.fn.center = function (parent) {
    if (parent) {
        parent = this.parent();
    } else {
        parent = window;
    }
    this.css({
        "position": "absolute",
        "top": ((($(parent).height() - this.outerHeight()) / 2) + $(parent).scrollTop() + "px"),
        "left": ((($(parent).width() - this.outerWidth()) / 2) + $(parent).scrollLeft() + "px")
    });
    return this;
};