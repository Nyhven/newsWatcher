/**
 * Created by Nyhven on 19/11/2016.
 */

// if (new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/").test(window.location.href)) {

var facebookMatcher = new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/");
var untrustedSites = [
    "theguardian.com",
    "bbc.co.uk",
    "brightside.me",
    "withgoogle.com",

    "100percentfedup.com",
    "21stcenturywire.com",
    "70news.wordpress.com",
    "abcnews.com.co",
    "activistpost.com",
    "addictinginfo.org",
    "americannewsx.com",
    "samericannews.com",
    "anonews.co",
    "associatedmediacoverage.com",
    "beforeitsnews.com",
    "beingliberal.org",
    "bigamericannews.com",
    "bigpzone.com",
    "bipartisanreport.com",
    "www.bizpacreview.com",
    "bluenationreview.com",
    "www.breitbart.com",
    "thebostontribune.com",
    "cap-news.com",
    "christwire.org",
    "chronicle.su",
    "civictribune.com",
    "coasttocoastam.com",
    "collectiveevolution",
    "consciouslifenews.com",
    "conservativeoutfitters.com",
    "wideawakeamerica.com",
    "countdowntozerotime.com",
    "counterpsyops.com",
    "creambmp.com",
    "dailybuzzlive.com",
    "dailycurrant.com",
    "dailywire.com",
    "dcclothesline.com",
    "dcgazette.com",
    "denverguardian.com",
    "derfmagazine.com",
    "disclose.tv",
    "drudgereport.com.co",
    "duffleblog.com",
    "duhprogressive.com",
    "embols.com",
    "empireherald.com",
    "empirenews.com",
    "endingthefed.com",
    "enduringvision.com",
    "fprnradio.com",
    "thefreethoughtproject.com",
    "geoengineeringwatch.org",
    "govtslaves.info",
    "gulagbound.com",
    "hangthebankers.com",
    "humansarefree.com",
    "huzlers.com",
    "ifyouonlynews.com",
    "infowars.com",
    "intellihub.com",
    "inquisitor.com",
    "jonesreport.com",
    "lewrockwell.com",
    "libertytalk.fm",
    "libertyunyielding.com",
    "libertyvideos.org",
    "mediamass.net",
    "megynkelly.us",
    "msnbc.com.co",
    "msnbc.website",
    "nahadaily.com",
    "nationalreport.net",
    "naturalnews.com",
    "nbc-news.net",
    "ncscooper.com",
    "newcenturytimes.com",
    "newsexaminer.net",
    "news-hound.com",
    "newsbiscuit.com",
    "newsbuzzdaily.com",
    "newslo.com",
    "newsmutiny.com",
    "newswatch28.com",
    "opposingviews.com",
    "newswire-24.com",
    "now8news.com",
    "nowtheendbegins.com",
    "occupydemocrats.com",
    "www.pakalertpress.com",
    "politicalblindspot.com",
    "politicalears.com",
    "politicalo.com",
    "politicususa.com",
    "prisonplanet.com",
    "private-eye.co.uk",
    "projectveritas.com",
    "react365.com",
    "realfarmacy.com",
    "realnewsrightnow.com",
    "redflagnews.com",
    "redstate.com",
    "rilenews.com",
    "satiratribune.com",
    "theblaze.com",
    "thefreethoughtproject.com",
    "newyorker.com/humor/borowitz-report",
    "other98.com",
    "www.reporter.bz",
    "www.thestatelyharold.com",
    "www.thedailysheeple.com",
    "www.thenewsnerd.com",
    "therundownlive.com",
    "theuspatriot.com",
    "truthfrequencyradio.com",
    "twitchy.com",
    "unconfirmedsources.com",
    "usasupreme.com",
    "blastingnews.com",
    "usuncut.com",
    "www.veteranstoday.com",
    "wakingupwisconsin.com",
    "winningdemocrats.com",
    "witscience.org",
    "www.wnd.com",
    "worldnewsdailyreport.com",
    "worldtruth.tv",
    "zerohedge.com"
];

window.setInterval(function() {
    if (facebookMatcher.test(window.location.href)) {
        checkNewLinks();
    }
}, 2000);

function checkNewLinks() {
    jQuery(".userContentWrapper:not(._nw_checked)").each(function(index) {
        //console.log($(this).find(".userContentWrapper").length);
        if ($(this).find(".userContentWrapper").length === 0) {
            console.log(this);
            var that = this;
            var isFake = false;
            var fullClass = $(this).attr('class');

            $(this).find('a[target="_blank"]').each(function(index){
                var href = $(this).attr('href');
                console.log(href);
                
                if (href.startsWith('http')) {
                    if (isLinkUntrusted(href)) {
                        isFake = true;
                        console.log(href);
                    }
                }
            })

            if (isFake) {
                $(this).find('.comment_link').each(function(index){
                    $(this).text('Comment (this site contains clickbait and unreliable news)');
                    $(this).hide().show();
                    $(this).css('color', 'red');
                    //$(this).parent().prev().hide();
                    $(this).parent().next().insertBefore($(this));

                });
                $(this).parent().css('border', '1px solid red');
                $(this).addClass('_nw_checked');
            }
            window.setTimeout(function() {
                $("[class='" + fullClass + "']").addClass('_nw_checked');
            }, 6500);
        }
    });
}

function isLinkUntrusted(url) {
    for (var i=0; i<untrustedSites.length; i++) {
        if (url.indexOf(untrustedSites[i]) !== -1) {
            return true;
        }
    }
}

window.notifyMe = function() {
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
        alert("This browser does not support desktop notification");
    } else if (Notification.permission === "granted") {
        // If it's okay let's create a notification
        var notification = new Notification("Hi there!");
    }

    // Otherwise, we need to ask the user for permission
    else if (Notification.permission !== 'denied') {
        Notification.requestPermission(function (permission) {
            // If the user accepts, let's create a notification
            if (permission === "granted") {
                var notification = new Notification("Hi there!");
            }
        });
    }
}
