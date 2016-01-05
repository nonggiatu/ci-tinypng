<?php
require_once("vendor/autoload.php");

class Tinypng
{
    /**
     * An instance of the CI super object.
     *
     * @access private
     *
     * @var object
     */
    private $ci;

    // ------------------------------------------------------------------------

    /**
     * Load dependacies and sets CI major object.
     *
     * @return void
     */
    function __construct()
    {
        \Tinify\setKey(TINIFY_API_KEY);

        $this->ci =& get_instance();
    }
	
	function tinify_image($filepath) {
		$source = \Tinify\fromFile($filepath);
		$source->toFile($filepath);
	}
}