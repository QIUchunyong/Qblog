$(function(){

	if ($('.category-index').length) {
		$.get($('.category-index').data('url'), function(html) {
			$('.category-index').html(html)
		})
	}

	if ($('.tag-index').length) {
		$.get($('.tag-index').data('url'), function(html) {
			$('.tag-index').html(html)
		})
	}

	if ($('.hot-article').length) {
		$.get($('.hot-article').data('url'), function(html) {
			$('.hot-article').html(html)
		})
	}

})