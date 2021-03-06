var currentPage = window.location.pathname.substr(1, 1000);
var alreadyAnimated = false;

var vue = new Vue(
{
    el: '#application',

    data: {
        showing: false,
        badge: 0,
        badgeTimeout: 6000
    },

    ready:  function()
    {
        this.setBadgeTimeout();
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

        updateBadge: function()
        {
            this.badge = this.badge+1;

            this.badgeTimeout = this.badgeTimeout + 2000;

            this.setBadgeTimeout();
        },

        setBadgeTimeout: function()
        {
            setTimeout(function() { this.vue.updateBadge() }, this.badgeTimeout);
        },

        back: function()
        {
            history.go(-1);
        },

        toggleDebug: function ()
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

if (jQuery('meta[name=animated]').attr("content") == "false")
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

    alreadyAnimated = true;
}

function hideHeader()
{
    jQuery('.header').hide();
    jQuery('.spinner').hide();
}

function toggleDebug()
{
    vue.toggleDebug();
}

function watchScroll()
{
    jQuery(window).scroll(function()
    {
        if (jQuery(this).scrollTop() == 0)
        {
            jQuery("#header").removeClass("shadow");
        }
        else
        {
            jQuery("#header").addClass("shadow");
        }
    });
}

watchScroll();
