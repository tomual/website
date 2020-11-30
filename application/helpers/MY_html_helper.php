<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('close_tags'))
{
	function close_tags($html)
	{
        preg_match_all('#<(img|br|hr|input)*[^>]*$#iU', $html, $result);
        if(!empty($result[1]))
        {
            $html .= "\">";
        }
        preg_match_all('#<(?!meta|img|br|hr|input\b)\b([a-z]+)(?: .*)?(?<![/|/ ])>#iU', $html, $result);
        $openedtags = $result[1];
        preg_match_all('#</([a-z]+)>#iU', $html, $result);
        $closedtags = $result[1];
        $len_opened = count($openedtags);
        if (count($closedtags) == $len_opened) {
            return $html;
        }
        $openedtags = array_reverse($openedtags);
        for ($i=0; $i < $len_opened; $i++) {
            if (!in_array($openedtags[$i], $closedtags)) {
                $html .= '</'.$openedtags[$i].'>';
            } else {
                unset($closedtags[array_search($openedtags[$i], $closedtags)]);
            }
        }
        return $html;
	}
}

function set_meta($key, $data) {
    $CI =& get_instance();
    $CI->{$key} = $data;
}

function has_meta($key) {
    $CI =& get_instance();
    if(isset($CI->{$key}))
    {
        return true;
    }
    return false;
}

function get_meta($key) {
    $CI =& get_instance();
    if(has_meta($key))
    {
        $meta = $CI->{$key};
        $CI->{$key} = '';
        return $meta;
    }
    return null;
}
