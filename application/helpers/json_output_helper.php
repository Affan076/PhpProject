<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function json_output($status,$respone)
{
$x=& get_instance();
$x->output->set_content_type('application/json');
$x->output->set_status_header($status);
$x->output->set_output(json_encode($respone));
}