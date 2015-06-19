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
