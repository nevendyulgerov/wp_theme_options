<?php

namespace ThemeOptions;

/**
 * Class Helper
 * Wrapper for helper methods
 * @package ThemeOptions
 */
class Helper {


    /**
     * Construct
     */
	public function __construct() {

	}


    /**
     * Convert xml to multidimensional array
     * @param $xml
     * @return array|mixed|object
     */
	public function xmlToArr($xml) {
		return json_decode(json_encode((array) $xml), 1);
	}


    /**
     * Get config data
     * @param $data
     * @param $prop
     * @return array
     */
	public function getConfigData($data, $prop) {
		return isset($data[$prop]) ? array($data) : $data; 
	}


    /**
     * Post param exists
     * @param $param
     * @return bool
     */
    public function postParamExist($param) {
        return !empty($_POST) && isset($_POST[$param]) && !empty($_POST[$param]);
    }
}