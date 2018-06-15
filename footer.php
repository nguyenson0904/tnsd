		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		<div id="goTop" class="goTop">
<img src="/wp-content/uploads/2018/04/gotoTop.png" alt="">
		</div>
<a href="tel:19002625" class="fancybox">
    <div class="vf-alo-phone vf-alo-green vf-alo-show" id="vf-alo-phoneIcon">
        <div class="vf-alo-ph-circle"></div>
        <div class="vf-alo-ph-circle-fill"></div>
        <div class="vf-alo-ph-img-circle"></div>
        <div class="vf-alo-text">1900.2625</div>
    </div>
</a>
		<ul id="floatsocial">
				<li class="ms"><a href="https://m.me/thieuniensieudang" target="_blank" data-balloon="Chat Facebook" data-balloon-pos="left"><i class="fab fa-facebook-messenger"></i></a></li>
				<li class="fb"><a href="https://www.facebook.com/thieuniensieudang/" target="_blank" data-balloon="Fanpage" data-balloon-pos="left"><i class="fab fa-facebook"></i></a></li>
				<li class="gift"><a href="#" data-balloon="Quà tặng" data-balloon-pos="left"><i class="fas fa-gift"></i></a></li>
				<li class="gtop"><a href="#"><i class="fas fa-chevron-up"></i></a></li>
		</ul>

		<div id="floatmessenger">
			<a href="https://m.me/thieuniensieudang" target="_blank"><img src="<?php echo get_template_directory_uri().'/img/messenger-icon.png';?>" alt=""></a>
		</div>
		<script type="text/javascript">
		(function($) {

			// Code Countdown
			//////////////////////////////////////////////////////////
//			$('#countdown').downCount({
//					date: '06/25/2018 23:00:59',
//					offset: +7
//			}, function () {
//					console.log('done');
//			});	
            
            $('.countdown').downCount({
					date: '06/25/2018 23:00:59',
					offset: +7
			}, function () {
					console.log('done');
			});


			// Code submit form499
			//////////////////////////////////////////////////////////
			$('#formdangky').one('submit',function(){
		var inputq1 = encodeURIComponent($('#ften').val());
		var inputq2 = encodeURIComponent($('#femail').val());
		var inputq3 = encodeURIComponent($('#fdienthoai').val());
		var inputq4 = encodeURIComponent($('#fkhuvuc').val());
		var q1ID = "entry.750667992";
		var q2ID = "entry.653388676";
		var q3ID = "entry.1573367888";
		var q4ID = "entry.450826594";

		var baseURL = 'https://docs.google.com/forms/d/e/1FAIpQLScR-7_R1Epqy9C9IAqCIQmNiPu8r1zh4ZLQWgk-tF7GeHhCAg/formResponse?';
		var submitRef = '&submit=Submit';
		var submitURL = (baseURL + q1ID + "=" + inputq1 + "&" + q2ID + "=" + inputq2+ "&" + q3ID + "=" + inputq3+ "&" + q4ID + "=" + inputq4 + submitRef);
		console.log(submitURL);
		$(this)[0].action=submitURL;
		$('#formdangky').html('<div class="form-success">Gửi thông tin thành công !</div>');

		setTimeout(function(){
			$(location).attr('href',"http://thieuniensieudang.com/thankyou");
		}, 500);
});
            
			// Code submit formfree
			//////////////////////////////////////////////////////////
			$('.formfree').one('submit',function(){
		var inputq1 = encodeURIComponent($('#freeten').val());
		var inputq3 = encodeURIComponent($('#freedienthoai').val());
		var inputq4 = encodeURIComponent($('#freekhuvuc').val());
		var q1ID = "entry.750667992";
		var q3ID = "entry.1573367888";
		var q4ID = "entry.450826594";

		var baseURL = 'https://docs.google.com/forms/d/e/1FAIpQLSfZjqNLLVKQsHcqzFh0EOg8iRNudWwbLBTHeapICPLzoCxnxQ/formResponse?';
		var submitRef = '&submit=Submit';
		var submitURL = (baseURL + q1ID + "=" + inputq1 + "&" + q3ID + "=" + inputq3+ "&" + q4ID + "=" + inputq4 + submitRef);
		console.log(submitURL);
		$(this)[0].action=submitURL;
		$('.formfree').html('<div class="form-success">Gửi thông tin thành công !</div>');

		setTimeout(function(){
			$(location).attr('href',"http://thieuniensieudang.com/thankyoufree");
		}, 500);
});


			// Code submit form
			//////////////////////////////////////////////////////////
			$('#formquatang').one('submit',function(){
		var inputq1 = encodeURIComponent($('#gemail').val());
		var q1ID = "entry.576441458";
		var baseURL = 'https://docs.google.com/forms/d/e/1FAIpQLSfRIBcX17-eVxD2tOuQgz4NRUbQZy3UR4YNDmDb0Kq6Sw9N-g/formResponse?';
		var submitRef = '&submit=Submit';
		var submitURL = (baseURL + q1ID + "=" + inputq1  + submitRef);
		console.log(submitURL);
		$(this)[0].action=submitURL;
		$('#formquatang').html('<div class="form-success">Đăng ký thành công !</div>');

		setTimeout(function(){ PUM.close(95); }, 200);
});



			// scrollTop
			//////////////////////////////////////////////////////////
			$(".goTop").click(function() {
			$('html, body').animate({
			    scrollTop: $("#topBanner").offset().top
			}, 1000);
		});

			// scrollToForm
			//////////////////////////////////////////////////////////
			$("#floatcta").click(function() {
			$('html, body').animate({
			    scrollTop: $("#form").offset().top
			}, 1000);
		});
			$(".gotoform").click(function() {
			$('html, body').animate({
			    scrollTop: $("#form").offset().top
			}, 1000);
		});

			// scrollNav
			//////////////////////////////////////////////////////////
			$(".nav1-link").click(function() {
			$('html, body').animate({
			    scrollTop: $("#nav1-target").offset().top
			}, 1000);
		});
			$(".nav2-link").click(function() {
			$('html, body').animate({
			    scrollTop: $("#nav2-target").offset().top
			}, 1000);
		});
			$(".nav3-link").click(function() {
			$('html, body').animate({
			    scrollTop: $("#nav3-target").offset().top
			}, 1000);
		});

		//track popup quà tặng đã mở chưa
		popmark=0;
		$(window).scroll(function() {
			navheight = $('#masthead').height();
				var winTop = $(window).scrollTop();
				if (winTop >= navheight + 300) {
						$('#goTop').addClass("active");
						$('#floatnav').addClass("active");
				} else {
						if (winTop <= 30) {
								$('#goTop').removeClass("active");
                            $('#floatnav').removeClass("active");
						}
				}

				// Trigger popup Qùa tặng khi scroll xuống banner to

				var hT = $('#nav3-target').offset().top,
				       hH = $('#nav3-target').outerHeight(),
				       wH = $(window).height(),
				       wS = $(this).scrollTop();
				   if (wS > (hT+hH-wH)){
				     //   if(popmark==0){
							// 	 console.log('ding'+popmark);
							// 	 popmark=1;
							// 	  PUM.open(95);
						 //
						 // }
//						 $('#floatsocial').addClass("hide");
				   } else {
//				   	$('#floatsocial').removeClass("hide")
				   }
		});

		})( jQuery );
		</script>
	</body>
</html>
