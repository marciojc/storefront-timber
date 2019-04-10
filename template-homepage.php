<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package storefront
 */
$context = Timber::context();
$post = new Timber\Post();
$context['post'] = $post;
Timber::render( array( 'template-homepage.twig', 'page.twig' ), $context );
