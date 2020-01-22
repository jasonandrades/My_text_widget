<?php
/*
Plugin Name: My Text Widget
Plugin URI: #
Description: My Text Widget plugin is used to put multiple text values in the single widget area. 
Version: 1.0
Author: Underscore Admin
Author URI: #
License: GPL2 
*/

class MyTextWidget extends WP_Widget
{
    public function __construct() {
        parent::__construct("custom_text_widget", "My Text Widget",
            array("description" => "Use multiple times in widget area to display pre-define text on front end."));
    }

    public function form($instance) {
        $title = "";
        $text = "";

        if (!empty($instance)) {
            $title = $instance["title"];
            $text = $instance["text"];
        }
