<?php
require_once("vendor/autoload.php");

class Tinypng
{

    /**
     * Set Tiny API Key
     *
     * @return void
     */
    function __construct($api_key)
    {
      \Tinify\setKey($api_key);
    }

    function tinify_image($filepath) {
      $source = \Tinify\fromFile($filepath);
      $source->toFile($filepath);
    }
}
