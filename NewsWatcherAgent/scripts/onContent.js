/**
 * Created by Nyhven on 19/11/2016.
 */

// alert(new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?facebook.com\\/").test("https://www1.fr-zqd.facebook.com/"));

var test = "facebook.com";
var matcher = new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ test +"\\/");

jQuery(".userContentWrapper").each(function(index) {
    var that = this;
    var isFake = false;

    $(this).find("a").each(function(index){
        var href = $(this).attr('href');
        if (matcher.test(href)) {
            var linkIsFake = (href.indexOf('remhq.com') !== -1);

            if (linkIsFake) {
                isFake = true;
            }
        }
    })

    if (isFake) {
        $(this).find('.comment_link').each(function(index){
            $(this).text('Let people know this is fake!');
        });
    }
});