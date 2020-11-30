<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('preview'))
{
	function preview($content, $limit)
	{
		$CI =& get_instance();

        if(strlen($content) < $limit)
        {
            return $content;
        }

        $last_word_pos = strrpos(substr($content, 0, $limit), ' ');

        $truncated_content = substr($content, 0, $last_word_pos);

        $preview = close_tags($truncated_content);

        return $preview . ' ...';
	}
}

function post_url($post)
{
    $url = base_url("blog/view/{$post->post_id}/");

    $url = $url . strtolower(trim(preg_replace('~[^0-9a-z]+~i', '-', html_entity_decode(preg_replace('~&([a-z]{1,2})(?:acute|cedil|circ|grave|lig|orn|ring|slash|th|tilde|uml);~i', '$1', htmlentities($post->title, ENT_QUOTES, 'UTF-8')), ENT_QUOTES, 'UTF-8')), '-'));

    return $url;
}

