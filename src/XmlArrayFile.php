<?php
	/**
	 * Created by PhpStorm.
	 * User: pooja
	 * Date: 9/5/17
	 * Time: 3:09 PM
	 */
	
	
	namespace config;

	
	class XmlArrayFile implements ArrayFileInterface {
		/**
		 * Reads the given xml file and returns an array. The array returned will be a key-value array, and may be nested.
		 *
		 * @param string $strFilePath	The path of a file that when processed will become a key-value array.
		 * @return array
		 */
		public function readFile($strFilePath) {
			$result = simplexml_load_file($strFilePath, null, LIBXML_NOERROR);
			$result = json_decode(json_encode($result), true);
			return $result ?: array();
		}
	}