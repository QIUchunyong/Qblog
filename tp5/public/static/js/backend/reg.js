$(function(){

	function append_error(form_group, error_msg) {
		form_group.addClass('has-error');
		form_group.find('.error-msg').remove();
		form_group.append('<span class="help-block error-msg">'+error_msg+'</span>');
	}

	function remove_error(form_group) {
		form_group.removeClass('has-error');
		form_group.find('.error-msg').remove();
	}

	// 验证用户名
	function check_username() {
		var pattern = /^\w{4,12}$/;
		var input = $('[name=username]');
		var form_group = input.parent();

		var username = $.trim(input.val());
		if (!pattern.test(username)) {
			// 处理错误输出
			append_error(form_group, '用户名不合法');
		} else {
			remove_error(form_group);
			is_user_exist();
		}
	}

	function is_user_exist() {
		var input = $('[name=username]');
		var username = input.val();
		var form_group = input.parent();

		var url = input.data('url') + '?username='+username;
		$.get(url, function(res) {
			if (res.data.exist) {
				append_error(form_group, '用户名已存在');
			} else {
				remove_error(form_group);
			}
		})
	}

	function check_password() {
		var input = $('[name=password]');
		var form_group = input.parent();
		var reinput = $('[name=repassword]');
		var reform_group = reinput.parent();

		var password = input.val();
		var repassword = reinput.val();



		
		if (password!=repassword) {
			append_error(form_group, '两次密码不一致');
			append_error(reform_group, '两次密码不一致');
		} else {
			remove_error(form_group);
			remove_error(reform_group);
		}
	}

	$('[name=username]').on('blur', function() {
		check_username();
	})

	$('.password').on('blur', function() {
		check_password();
	})

	$('.btn-submit').on('click', function() {
		var form = $('.login-form');
		check_username();
		check_password();


		if (!$('.has-error').length) {
			form.submit();
		}
	})
});
