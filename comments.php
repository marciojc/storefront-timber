<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package storefront
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}

$context = Timber::context();
$post = Timber::query_post();
$context['post'] = $post;
$context['posts'] = new Timber\PostQuery();
$context['have_comments'] = have_comments();
$context['no_comments'] = ! comments_open() && 0 !== intval( get_comments_number() ) && post_type_supports( get_post_type(), 'comments' );
$context['have_navigation'] = get_comment_pages_count() > 1 && get_option( 'page_comments' );

Timber::render( array( 'comments.twig' ), $context );
