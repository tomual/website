<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (! function_exists('paginate')) {
    function paginate(&$results)
    {
        $CI =& get_instance();
        $info = array('total' => count($results), 'limit' => 10);
        $page = $CI->input->get('page');
        $offset = ($page - 1) * 10;
        $length = 10;
        $pages = ceil(count($results) / $length);
        if ($page) {
            $results = array_slice($results, $offset, $length);
        }
        $results = array_slice($results, 0, $length);

        return $info;
    }
}
