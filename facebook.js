$(function() {
    // ページプラグインの埋め込みコードを返す
    function pagePluginCode(w) {

        // 幅に応じて高さを変更する場合は、変数 h に高さの値を代入
        if(w > 400) {
            var h = 300;
        } else {
            var h = 200;
        }

        // 書き換えたStep3のコードを「return」に記述
        return  '<div class="fb-page" data-href="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126" data-tabs="timeline" data-width="${w}" data-height="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126" class="fb-xfbml-parse-ignore"><a href=""https://www.facebook.com/%E6%97%A5%E6%9C%AC%E8%88%9E%E8%B8%8A-%E7%9B%B4%E6%B4%BE%E5%88%86%E5%AE%B6%E8%8B%A5%E6%9F%B3%E6%B5%81-319206524870126">日本舞踊 直派分家若柳流</a></blockquote></div> ';
    }
 
    // ページプラグインを追加する要素
    var facebookWrap = $('.facebook-wrapper');
    var fbBeforeWidth = ''; // 前回変更したときの幅
    var fbWidth = facebookWrap.width(); // 今回変更する幅
    var fbTimer = false;
    $(window).on('load resize', function() {
        if (fbTimer !== false) {
            clearTimeout(fbTimer);
        }
        fbTimer = setTimeout(function() {
            fbWidth = Math.floor(facebookWrap.width()); // 変更後の幅を取得し、小数点以下切り捨て
            // 前回の幅から変更があった場合のみ処理
            if(fbWidth != fbBeforeWidth) {
                facebookWrap.html(pagePluginCode(fbWidth)); // ページプラグインのコード変更
                window.FB.XFBML.parse(); // ページプラグインの再読み込み
                fbBeforeWidth = fbWidth; // 今回変更分を保存
            }
        }, 200);
    });
});