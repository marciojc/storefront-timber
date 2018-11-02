<?php
/**
 * The Template for the sidebar containing the main widget area
 *
 * @package  WordPress
 * @subpackage  Timber
 */

$context = array();
$context['dynamic_sidebar'] = Timber::get_widgets('sidebar-1');
Timber::render( array( 'sidebar.twig' ), $context);
