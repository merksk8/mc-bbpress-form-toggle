jQuery( document ).ready(function($) {
	$(".mc_new_topic.button").click(function(e){
		e.preventDefault();
		console.log($("#mc_post_button").offset());
		$(".entry-content .bbp-form").slideToggle('slow', function(){
			$('html, body').animate({
				scrollTop: $("#mc_post_button").offset().top + 'px'
			}, 500, 'swing');
		});
		return false;
	});
	$(".bbp-topic-reply-link").click(function(e){
		e.preventDefault();
		console.log($("#mc_post_button").offset());
		$(".entry-content .bbp-form").slideToggle('slow', function(){
			$('html, body').animate({
				scrollTop: $("#mc_post_button").offset().top + 'px'
			}, 500, 'swing');
		});
		return false;
	});
});