<?php

function register_my_menu() {
register_nav_menu('additional-menu',__( 'Additional Menu' ));
}
add_action( 'init', 'register_my_menu' );
