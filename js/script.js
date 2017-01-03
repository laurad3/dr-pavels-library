$(document).ready(function() {
	// nav-icon
	$('.nav-icon').on('click', function() {
		$(this).toggleClass('open');
		$('.mobile-nav').children('ul').slideToggle('fast');
	});

	if($(window).width() < 760) {
		$('.main-nav').hide();
		$('.mobile-nav').show();
		$('.login-btn').hide();
		$('.nav-icon').show();
	} else if($(window).width() > 760) {
		$('.mobile-nav').hide();
		$('.main-nav').show();
		$('.login-btn').show();
		$('.nav-icon').hide();
	}

	$(window).resize(function() {
		if($(window).width() < 760) {
			$('.main-nav').hide();
			$('.mobile-nav').show();
			$('.login-btn').hide();
			$('.nav-icon').show();
		} else if($(window).width() > 760) {
			$('.mobile-nav').hide();
			$('.main-nav').show();
			$('.login-btn').show();
			$('.nav-icon').hide();
		}
	});

	// user icon and options
	$('.user-options, .arrow-up').hide();
	$('.overlay').hide();

	$('.user-btn').on('click', function() {
		$('.user-options, .arrow-up').slideToggle('fast');
	});

	$('.story').hover(function() {
		$(this).children('.overlay').fadeIn('fast');
	}, function() {
		$(this).children('.overlay').fadeOut('fast');
	});

	$('.like i').on('click', function() {
		var isFavorite = $(this).attr('class').split(' ').slice(-1);
		console.log(isFavorite);

		if(isFavorite == 'unfavorited') {
			// change icon
			$(this).removeClass('fa-heart-o');
			$(this).addClass('fa-heart');

			$(this).removeClass('unfavorited');
			$(this).addClass('favorited');
		} else if(isFavorite == 'favorited') {
			// change icon
			$(this).removeClass('fa-heart');
			$(this).addClass('fa-heart-o');

			$(this).removeClass('favorited');
			$(this).addClass('unfavorited');
		}
	});

	// show image on upload
	var $input = $('.inputfile');
	var $img = $('.uploaded-image');

	$input.on('change', function(e) {
		var fileName = URL.createObjectURL(e.target.files[0]);
		var fileType = $(this).val();
		fileType = fileType.split('\\').pop().split('.').pop();

		if(fileType != 'jpg' && fileType != 'png' && fileType != 'jpeg' && fileType != 'gif') {
			$('.image-error-message').text('Only jpg, png, jpeg and gif images are allowed!');
		} else {
			$img.attr('src', fileName);
		}
	});
});