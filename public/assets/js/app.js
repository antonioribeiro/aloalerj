var currentPage = window.location.pathname.substr(1, 1000);

new Vue(
{
    el: '#application',

    data: {
        showing: false
    },

    methods:
    {
        page: function(pageName)
        {
            $.get(pageName, function( data )
            {
                console.log(data);
            });
        },

        onClick: function (e)
        {
            if ( ! this.showing)
            {
                jQuery(".hiddenLink").addClass("showButton");
            }
            else
            {
                jQuery(".hiddenLink").removeClass("showButton");
            }

            this.showing = ! this.showing;
        }
    }
});

//jQuery(document).ready(function()
//{
//
//
//    if ( ! currentPage)
//    {
//        currentPage = 'home';
//    }
//
//    jQuery("body").css("background-image", 'url("/assets/img/'+currentPage+'.jpg")');
//});

jQuery(".hiddenLink").addClass("showButton");

if (['home', 'aloalerj'].indexOf(currentPage) >= 0)
{
    jQuery('html, body').animate(
    {
        scrollTop: 3500
    }, 2500, function()
    {
        jQuery('html, body').animate(
        {
            scrollTop: 0
        }, 800);
    });
}
