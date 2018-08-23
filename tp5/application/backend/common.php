<?php

/**
 * 验证用户名是否合法 用户名长度4-12, 字母数字下划线[a-zA-Z0-9_] \w \d strlen
 */
function check_username($username)
{
	$pattern = '/^\w{4,12}$/';
	return preg_match($pattern, $username);
}

function encrypt($str)
{
	return md5($str);
}

