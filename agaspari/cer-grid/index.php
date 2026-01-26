<?php
defined('ABSPATH') || exit;
add_action('init', function(){
    register_block_type(__DIR__);
});

/*
function register_my_block(){
    register_block_type(__DIR__);
}

add_action('init', 'register'); */