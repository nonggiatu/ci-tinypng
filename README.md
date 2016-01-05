#CI-TinyPNG
This is a CodeIgniter library wrapper for [TinyPNG API](https://tinypng.com/developers/reference/php)

## Installation

Clone this repo and copy all files to the *application/libraries* folder

Run composer to get Tinify

`composer install`

## Usage

Load the TinyPNG library with your TinyPNG Api key

`$this->load->library('tinypng', $YOUR_API_KEY);`

Tinify the image using tinify_image function from the library

`$this->tinypng->tinify_image($image_full_path)`

