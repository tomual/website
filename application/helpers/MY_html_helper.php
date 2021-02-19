<?php
defined('BASEPATH') or exit('No direct script access allowed');

function alerts()
{
    $ci = &get_instance();
    $close = '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
    if ($ci->session->flashdata('error')) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">' . $ci->session->flashdata('error') . $close . '</div>';
    }
    if ($ci->session->flashdata('warning')) {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">' . $ci->session->flashdata('warning') . $close . '</div>';
    }
    if ($ci->session->flashdata('info')) {
        echo '<div class="alert alert-info alert-dismissible fade show" role="alert">' . $ci->session->flashdata('info') . $close . '</div>';
    }
    if ($ci->session->flashdata('success')) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">' . $ci->session->flashdata('success') . $close . '</div>';
    }
}

function set_title($title)
{
    $ci = &get_instance();
    $ci->title = $title;
}

function get_title()
{
    $ci = &get_instance();
    return $ci->title ?? null;
}

function dd($item)
{
    echo '<pre>';
    print_r($item);
    echo '</pre>';
}
