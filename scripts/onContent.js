/**
 * Created by Nyhven on 19/11/2016.
 */

alert(new RegExp("^http(s)?:\/\/([a-zA-Z0-9\-\.\_\~]*\.)?facebook\.com.+$").exec("https://www1.fr-zqd.facebook.com/"));
alert(new RegExp("/^http(s)?:\/\/([a-zA-Z0-9\-\.\_\~]*\.)?facebook\.com.+$/g").exec("https://www1.fr-facebook.com/"));
alert(new RegExp("/^http(s)?:\/\/([a-zA-Z0-9\-\.\_\~]*\.)?facebook\.com.+$/g").exec("https://www.qzdug.facebook.com/"));
alert(new RegExp("/^http(s)?:\/\/([a-zA-Z0-9\-\.\_\~]*\.)?facebook\.com.+$/g").exec("https://www.source.com/?source=www.facebook.com&"));

//
// jQuery(".userContentWrapper").each(function(index) {
//     var that = this;
//     var isFake = false;
//
//     $(this).find("a").each(function(index){
//         var href = $(this).attr('href');
//         if (href.startsWith('http') && href.indexOf('facebook.com') == -1) {
//
//
//             var linkIsFake = (href.indexOf('remhq.com') !== -1);
//
//             if (linkIsFake) {
//                 isFake = true;
//             }
//         }
//     })
//
//     if (isFake) {
//         $(this).find('.comment_link').each(function(index){
//             $(this).text('Let people know this is fake!');
//         });
//     }
// });