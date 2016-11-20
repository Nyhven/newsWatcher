/**
 * Created by Nyhven on 19/11/2016.
 */

// if (new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/").test(window.location.href)) {

var facebookMatcher = new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/");

window.setInterval(function() {
    if (facebookMatcher.test(window.location.href)) {
        reload();
    }
}, 2000);

var reload = function() {
    jQuery(".userContentWrapper").each(function(index) {
        var post = this;
        $(this).parent().find("a:not(._newswatcher_checked)").each(function(index){
            var href = $(this).attr('href');
            getLinkTruth(href, linkTruthCallback(post, href));
            $(this).addClass("_newswatcher_checked");
        });
    });
}

function getLinkTruth(url, callback) {
    console.log("getting link truth");
    console.log(url);
    window.setTimeout(function() {
        callback({truth: Math.floor(Math.random()*100)});
    }, 200);
}


function linkTruthCallback(userContentWrapper, url) {
    return function(results) {
        if (results.truth < 20) {
            $(userContentWrapper).find('.comment_link').each(function(index){
                $(this).text('Comment (untrustworthy article)');
            });
        } else if (results.truth < 40) {
            $(userContentWrapper).find('.comment_link').each(function(index){
                $(this).text('Comment (article might be fake)');
            });
        } else if (results.truth < 60) {
            $(userContentWrapper).find('.comment_link').each(function(index){
                $(this).text('Comment');
            });
        } else if (results.truth < 80) {
            $(userContentWrapper).find('.comment_link').each(function(index){
                $(this).text('Comment (article might be safe)');
            });
        } else {
            $(userContentWrapper).find('.comment_link').each(function(index){
                $(this).text('Comment (article is probably safe)');
            });
        }
    } 
}