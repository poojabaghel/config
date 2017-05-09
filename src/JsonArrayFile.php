<?php
	namespace config;
	
	class JsonArrayFile implements ArrayFileInterface {
		/**
		 * Reads the given json file and returns an array. The array returned will be a key-value array, and may be nested.
		 *
		 * @param string $strFilePath	The path of a file that when processed will become a key-value array.
		 * @return array
		 */
		public function readFile($strFilePath) {
			$result = json_decode(file_get_contents($strFilePath), true);
			return $result ?: array();
		}
	}