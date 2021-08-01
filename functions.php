<?php

	function SetUserTypeCookie($type)
	{
		$cookie_name = "userType";
		$cookie_value = $type;
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}

	function DeleteCookie()
	{
		setcookie("userType", "", time() - (86400 * 30), "/");
	}
?>