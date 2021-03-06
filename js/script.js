	/* ---------------------------------------------------------------------------------
	 ◆ アンカーリンクのスクロールイベント
	--------------------------------------------------------------------------------- */
	window.addEventListener('DOMContentLoaded', function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    //ヘッダーの高さを取得
    var header = $('header').height();
    //ヘッダーの高さを引く
    var position = target.offset().top - header;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});




window.addEventListener('DOMContentLoaded', function(){
 
	/* ---------------------------------------------------------------------------------
	 ◆ スクロールしたときにページの先頭へ移動するボタンを出現させるイベント
	--------------------------------------------------------------------------------- */
	$(window).scroll(function() {
		// ページのトップからのスクロール位置を取得
		var pos = $(window).scrollTop();
		// スクロール位置の研さ
		if (200 < pos) {
			// スクロールが200を超えたら「▲ ページの先頭へ」をゆっくりフェードインする (表示)
			$('#to-pagetop').fadeIn('slow');
		}
		else {
			// それ以外だったらフェードアウトする (非表示)
			$('#to-pagetop').fadeOut('slow');
		}
	});
 
	/* ---------------------------------------------------------------------------------
	 ◆ ページの先頭へ移動するボタンがクリックされた時のイベント
	--------------------------------------------------------------------------------- */
	$('#to-pagetop a').click(function(){
		// ページの先頭へ移動する
		$('html,body').animate({scrollTop:0}, 'fast');
	});
});