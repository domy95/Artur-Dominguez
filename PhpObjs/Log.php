<?php

	class Log {

		public static function info($data) {
			$output = $data;
			if (is_array($output))
				$output = implode(',', $output);
			echo "<script>console.log('Information: " . $output . "');</script>";
		}

		public static function error($data) {
			$output = $data;
			if (is_array($output))
				$output = implode(',', $output);
			echo "<script>console.log('Error: " . $output . "');</script>";
		}

		public static function debug($data) {
			$output = $data;
			if (is_array($output))
				$output = implode(',', $output);
			echo "<script>console.log('Debug: " . $output . "');</script>";
		}

	}

?>