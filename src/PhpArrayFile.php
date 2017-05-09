<?php
	/**
	 * Created by PhpStorm.
	 * User: pooja
	 * Date: 9/5/17
	 * Time: 3:10 PM
	 */
	
	
	namespace config;
	
	class PhpArrayFile implements ArrayFileInterface {
		/**
		 * Reads the given php file and returns an array. The array returned will be a key-value array, and may be nested.
		 *
		 * @param string $strFilePath	The path of a file that when processed will become a key-value array.
		 * @return array
		 */
		public function readFile($strFilePath) {
			include $strFilePath;
			return (isset($config) && is_array($config)) ? $config : array();
		}
	}