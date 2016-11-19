/**
 * Created by Nyhven on 19/11/2016.
 */

// if (new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/").test(window.location.href)) {

var facebookMatcher = new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/");

setInterval(function() {
    if (facebookMatcher.test(window.location.href)) {
        console.log("Facebook...");
        reload();
    }
}, 2000);

var reload = function() {
    jQuery(".userContentWrapper").each(function(index) {
        console.log("ContentWrapper: ");

        var isFake = false;

        $(this).find("a").each(function(index){
            var href = $(this).attr('href');
                var linkIsFake = (href.indexOf('remhq.com') !== -1);

                if (linkIsFake) {
                    isFake = true;
                }
        });

        if (isFake) {
            $(this).find('.comment_link').each(function(index){
                $(this).text('Let people know this is fake!');
            });
        }
    });
}