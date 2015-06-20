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
//    var name = window.location.pathname.substr(1, 1000);
//
//    if ( ! name)
//    {
//        name = 'home';
//    }
//
//    jQuery("body").css("background-image", 'url("/assets/img/'+name+'.jpg")');
//});

//jQuery(".hiddenLink").addClass("showButton");

jQuery('html, body').animate({
    scrollTop: 1600
}, 2500, function() {
    jQuery('html, body').animate({
        scrollTop: 0
    }, 800)
});
