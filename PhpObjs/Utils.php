<?php

	class Utils {
		
		public static $haRedireccionat = "COOKIE_HA_REDIRECCIONAT";

		public static function getHaRedireccionat() {
			if (isset($_COOKIE[Utils::$haRedireccionat]))
				return $_COOKIE[Utils::$haRedireccionat];
			else
				return false;
		}

		public static function setHaRedireccionat($value) {
			if (is_bool($value)) {
				Utils::setOwnCookie(Utils::$haRedireccionat, $value, time() + 3600);
			}
		}

		public static function setOwnCookie($name, $value, $expire) {
			setcookie($name, $value, $expire);
		}

	}

?>