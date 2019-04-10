<?php
/**
 * The template for displaying full width pages.
 *
 * Template Name: Full width
 *
 * @package storefront
 */

$context = Timber::context();
$post = new Timber\Post();
$context['post'] = $post;
Timber::render( array( 'template-fullwidth.twig', 'page.twig' ), $context );
