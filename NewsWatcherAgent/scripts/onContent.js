/**
 * Created by Nyhven on 19/11/2016.
 */

// if (new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/").test(window.location.href)) {

var facebookMatcher = new RegExp("http[s]?:\\/\\/([a-z0-9\\.-]*\\.)?"+ "facebook.com" +"\\/");
var sites = {
    untrusted: [
        "theguardian.com",
        "bbc.co.uk",
        "brightside.me",
        "withgoogle.com",

        "100percentfedup.com",
        "21stcenturywire.com",
        "70news.wordpress.com",
        "abcnews.com.co",
        "smilybox.fr",
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
    ],
    questionable: [
    // Links from https://github.com/selfagency/bs-detector/blob/master/greasemonkey-port/bs-detector.user.js
        'campaignmonitor.com',
        'auntyacid.com',

        '100percentfedup.com',
        '21stcenturywire.com',
        '24extremeworld.com',
        '24newsflash.com',
        '365usanews.com',
        '70news.wordpress.com',
        '800whistleblower.com',
        'abcnews.com.co',
        'abcnewsgo.co',
        'about2day.com',
        'abriluno.com',
        'aceflashman.wordpress.com',
        'activistpost.com',
        'addictinginfo.org',
        'adobochronicles.com',
        'aldipest.com',
        'allgoodsides.com',
        'allpoliticsnews.com',
        'americanlookout.com',
        'americannews.com',
        'americannewsx.com',
        'americantoday.news',
        'amplifyingglass.com',
        'amusmentic.com',
        'anonnews.co',
        'antiwar.com',
        'automotostar.com',
        'awesomethings4you.com',
        'banoosh.com',
        'beehivebugle.com',
        'beforeitsnews.com',
        'berniesanders24.com',
        'berniesandersnews.org',
        'betootaadvocate.com',
        'bients.com',
        'bigamericannews.com',
        'bigbluedimension.com',
        'bigbluevision.com',
        'bigbluevision.org',
        'bigpzone.com',
        'bipartisanreport.com',
        'bluenationreview.com',
        'borowitzreport.com',
        'breitbart.com',
        'bvanews.com',
        'callthecops.net',
        'cap-news.com',
        'celebtricity.com',
        'centralnewsamerica.com',
        'chaser.com.au',
        'checkoutthehealthyworld.com',
        'christiantimesnewspaper.com',
        'christwire.org',
        'chronicle.su',
        'cityworldnews.com',
        'civictribune.com',
        'clickhole.com',
        'cnnnext.com',
        'coasttocoastam.com',
        'collective-evolution.com',
        'concisepolitics.com',
        'consciouslifenews.com',
        'conservativeoutfitters.com',
        'conspiracywire.com',
        'cosmo-politics.com',
        'countdowntozerotime.com',
        'counterpsyops.com',
        'creambmp.com',
        'crystalair.com',
        'daily-magazine.news',
        'dailybuzzlive.com',
        'dailycurrant.com',
        'dailydemocraticnews.com',
        'dailyintestingthings.com',
        'dailyleak.org',
        'dailynews24-7.com',
        'dailynewsbin.com',
        'dailypolitics.info',
        'dailypoliticsusa.com',
        'dailysquib.co.uk',
        'dailystormer.com',
        'davidduke.com',
        'dailywire.com',
        'davidwolfe.com',
        'dcclothesline.com',
        'dcgazette.com',
        'delectabledietofpics.net',
        'departed.co',
        'der-postillon.com',
        'derfmagazine.com',
        'dineal.com',
        'disclose.tv',
        'diversitychronicle.wordpress.com',
        'doctorhealth365.com',
        'donaldtrumpnews.co',
        'drudgereport.com.co',
        'duffleblog.com',
        'duhprogressive.com',
        'eatinghealthytricks.com',
        'elelephantintheroom.blogspot.com',
        'elitereaders.com',
        'elkoshary.com',
        'elmundotoday.com',
        'embols.com',
        'empireherald.com',
        'empirenews.com',
        'empirenews.net',
        'empiresports.co',
        'enabon.com',
        'endingthefed.com',
        'enduringvision.com',
        'english.ruvr.ru',
        'eutimes.net',
        'everydayworldnews.com',
        'everythingnewdaily.com',
        'extraclubmagazine.com',
        'fakingnews.com',
        'fantasticword.com',
        'federalistpress.com',
        'fognews.ru',
        'fprnradio.com',
        'freepatriot.org',
        'freewoodpost.com',
        'fromthetrenchesworldreport.com',
        'geoengineeringwatch.org',
        'globalresearch.ca',
        'gomerblog.com',
        'gonzoglobe.com',
        'gossipknowledge.com',
        'govtslaves.info',
        'guardianlv.com',
        'gulagbound.com',
        'hangthebankers.com',
        'healthimpactnews.com',
        'holyobserver.com',
        'humansarefree.com',
        'huzlers.com',
        'ifyouonlynews.com',
        'igrewupinusa.info',
        'ijr.com',
        'indiaarising.com',
        'informetoday.com',
        'infowars.com',
        'instaworldnews.com',
        'intellihub.com',
        'intrendtoday.com',
        'inquisitor.com',
        'itaglive.com',
        'iwanttoexplore.com',
        'jesus-is-savior.com',
        'jonesreport.com',
        'landoverbaptist.org',
        'latestnews5.com',
        'legorafi.fr',
        'lewrockwell.com',
        'liberalamerica.org',
        'liberalbias.com',
        'libertymovementradio.com',
        'libertynews.com',
        'libertytalk.fm',
        'libertyunyielding.com',
        'libertyvideos.org',
        'lifeandabout.com',
        'lifeprevention.com',
        'lightlybraisedturnip.com',
        'livefreelivenatural.com',
        'livevote.com',
        'lushforlife.com',
        'madworldnews.com',
        'mediamass.net',
        'mediazone.news',
        'megafreshnews.com',
        'megynkelly.us',
        'miniplanet.us',
        'morningnewsusa.com',
        'mrconservative.com',
        'msnbc.website',
        'mydailyrelaxation.com',
        'nahadaily.com',
        'nationalreport.net',
        'naturalcuresnotmedicine.com',
        'naturalnews.com',
        'nbcpolitics.org',
        'nbcpoll.com',
        'ncscooper.com',
        'newcenturytimes.com',
        'news-hound.com',
        'news-hound.org',
        'newsbbc.net',
        'newsbiscuit.com',
        'newscenterusa.com',
        'newsexaminer.net',
        'newsfrompolitics.com',
        'newslo.com',
        'newsmutiny.com',
        'newsopening.com',
        'newsthump.com',
        'newstoad.net',
        'newswire-24.com',
        'nodisinfo.com',
        'notallowedto.com',
        'now8news.com',
        'nowtheendbegins.com',
        'nymeta.co',
        'nyuzer.com',
        'objectiveministries.org',
        'occupydemocrats.com',
        'occupyliberals.com',
        'odgossip.com',
        'openmindmagazine.com',
        'other98.com',
        'pakalertpress.com',
        'patriotchronicle.com',
        'politicalblindspot.com',
        'politicalears.com',
        'politicalo.com',
        'politicalsitenews.com',
        'politicaltimes.org',
        'politicsbreaking.com',
        'politicsinformation.com',
        'politicsinfotoday.com',
        'politicsintheusa.com',
        'politicsinusa.com',
        'politicsusa.com',
        'powerpoliticians.com',
        'presidentialvoting2016.com',
        'press24.us',
        'presstv.ir',
        'prisonplanet.com',
        'prisonplanet.tv',
        'private-eye.co.uk',
        'projectveritas.com',
        'proudemocrat.com',
        'randpaulreview.com',
        'rawforbeauty.com',
        'rawws.com',
        'realfarmacy.com',
        'realnewsrightnow.com',
        'realplanetnews.com',
        'realprogress.online',
        'redflagnews.com',
        'reductress.com',
        'rense.com',
        'responsibletechnology.org',
        'rilenews.com',
        'rockcitytimes.com',
        'rt.com',
        'satiratribune.com',
        'satirewire.com',
        'scrappleface.com',
        'secretsofthefed.com',
        'shadowproof.com',
        'sott.net',
        'sourceplanet.net',
        'southweb.org',
        'speciallifeentertainment.com',
        'speld.nl',
        'spinzon.com',
        'sportspickle.com',
        'stneotscitizen.com',
        'stuppid.com',
        'suggesthealthytips.com',
        'superstation95.com',
        'theautogear.com',
        'thebeaverton.com',
        'thecarsmagazine.com',
        'thecivilian.co.nz',
        'thecommonsenseshow.com',
        'thecontroversialfiles.net',
        'thedailymash.co.uk',
        'thedailysheeple.com',
        'thedailywtf.com',
        'thedemocratic.site',
        'thefreethoughtproject.com',
        'thelapine.ca',
        'thelastgreatstand.com',
        'themideastbeast.com',
        'thenewamerican.com',
        'thenewsnerd.com',
        'theonion.com',
        'theoxymoron.co.uk',
        'thepeoplescube.com',
        'thepoke.co.uk',
        'theracketreport.com',
        'therightplanet.com',
        'therightstuff.biz',
        'therundownlive.com',
        'thespoof.com',
        'theunrealtimes.com',
        'theuspatriot.com',
        'thevalleyreport.com',
        'theworldstyle.com',
        'thisismynewworld.com',
        'topekasnews.com',
        'topinfopost.com',
        'topnewspolitics.com',
        'totalworldnews.com',
        'trendingnewsguide.com',
        'trendingnewstoday.net',
        'tribuneherald.net',
        'truthandaction.org',
        'truthbroadcastnetwork.com',
        'truthfeed.com',
        'truthfrequencyradio.com',
        'tunerspeed.com',
        'turnerradionetwork.com',
        'tyronetribulations.com',
        'twitchy.com',
        'unconfirmedsources.com',
        'undergroundhealth.com',
        'universepolitics.com',
        'usa2016elections.com',
        'usadailypolitics.com',
        'usadailytime.com',
        'usahitman.com',
        'usainfobox.com',
        'usajournalist.com',
        'usalinepolitics.com',
        'usalinepoliticsnow.com',
        'usamagazinestudio.com',
        'usanews24hrs.com',
        'usanewsflash.com',
        'usanewshome.com',
        'usanewsinsider.com',
        'usanewspolitics.com',
        'usanewsstudio.com',
        'usaonlinepolitics.com',
        'usaonlinetoday.com',
        'usaphase.com',
        'usapoliticsdaily.com',
        'usapoliticsnow.com',
        'usapoliticus.com',
        'usapowernews.com',
        'usascan.com',
        'usasupreme.com',
        'usatoday.com.co',
        'usatwentyfour.com',
        'usblastingnews.com',
        'usfanzone.com',
        'uslifetoday.com',
        'usmediacenter.com',
        'uspolitics24.com',
        'uspoliticslive.com',
        'usuncut.com',
        'usviewer.com',
        'veteranstoday.com',
        'vonpress.com',
        'votocrat.com',
        'wakingupwisconsin.com',
        'waterfordwhispersnews.com',
        'weeklyworldnews.com',
        'westernjournalism.com',
        'whydontyoutrythis.com',
        'wideawakeamerica.com',
        'winkprogress.com',
        'winningdemocrats.com',
        'witscience.org',
        'wnd.com',
        'world24monitor.com',
        'worldcallyoutoday.com',
        'worlddaily.info',
        'worldnewsdailyreport.com',
        'worldrumor.com',
        'worldstoriestoday.com',
        'worldtruth.tv',
        'worldwidehealthy.com',
        'wundergroundmusic.com',
        'yourfunpage.com',
        'yournewswire.com',
        'zaytung.com'
    ]
};

window.setInterval(function() {
    if (facebookMatcher.test(window.location.href)) {
        checkNewLinks();
    }
}, 2000);

function checkNewLinks() {
    jQuery(".userContentWrapper:not(._nw_checked)").each(function(index) {
        //console.log($(this).find(".userContentWrapper").length);
        if ($(this).find(".userContentWrapper").length === 0) {
            var that = $(this);
            console.log(that);
            var isFake = false;
            var isQuestionable = false;
            var fullClass = that.attr('class');

            that.find('a[target="_blank"]').each(function(index){
                var href = $(this).attr('href');
                console.log(href);
                
                if (href.startsWith('http')) {
                    if (isLinkUntrusted(href)) {
                        isFake = true;
                        console.log(href);
                    } else if (isLinkQuestionable(href)) {
                        isQuestionable = true;
                    }
                }
            });

            if (isFake) {
                that.prepend('<div class="wrapper"><div class="ribbon-wrapper-green"><div class="ribbon-green">WARNING</div></div></div>​');

                $(this).find('.comment_link').each(function(index){
                    $(this).parent().next()
                        .after('<hr><p style="color:red; font-weight:bold;">Warning: this site contains clickbait or unreliable, very biased news and is rated "unreliable" by NewsWatcher. Think before you share, and consider commenting so people know.</p><p style="color: #444">Example comment: "Hi, just so you know this site is known for misleading or very biased news, so don\'t believe everything you read there. See <a style="margin: 0; padding: 0; color: #222" href="http://newswatcher.co">newswatcher.co</a> for details"</p>');
                });

                that.parent().css('border', '1px solid red');
                that.addClass('_nw_checked');
            } else if (isQuestionable) {
                that.prepend('<div class="wrapper"><div class="ribbon-wrapper-green"><div class="ribbon-green">WARNING</div></div></div>​');

                $(this).find('.comment_link').each(function(index){
                    $(this).parent().next()
                        .after('<hr><p style="color:red; font-weight:bold;">Warning: NewsWatcher rates this site as "questionable". Think before you share, and consider commenting so people know.</p><p style="color: #444">Example comment: "Just so you know, NewsWatcher rated this site "questionable" so don\'t believe everything you read there. See <a style="margin: 0; padding: 0; color: #222" href="http://newswatcher.co">newswatcher.co</a> for details"</p>');
                });

                that.parent().css('border', '1px solid red');
                that.addClass('_nw_checked');
            } 
            window.setTimeout(function() {
                $("[class='" + fullClass + "']").addClass('_nw_checked');
            }, 6500);
        }
    });
}

function isLinkUntrusted(url) {
    for (var i=0; i<sites.untrusted.length; i++) {
        if (url.indexOf(sites.untrusted[i]) !== -1) {
            return true;
        }
    }
}
function isLinkQuestionable(url) {
    for (var i=0; i<sites.questionable.length; i++) {
        if (url.indexOf(sites.questionable[i]) !== -1) {
            return true;
        }
    }
}

