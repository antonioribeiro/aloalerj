new Vue(
{
    el: '#application',

    data: {
        showing: false
    },

    methods:
    {
        onClick: function (e)
        {
            if ( ! this.showing)
            {
                $(".link").addClass("showButton");
            }
            else
            {
                $(".link").removeClass("showButton");
            }

            this.showing = ! this.showing;
        }
    }
});

$(document).ready(function()
{
    var name = window.location.pathname.substr(1, 1000);

    if ( ! name)
    {
        name = 'home';
    }

    $("body").css("background-image", 'url("/assets/img/'+name+'.jpg")');
});


