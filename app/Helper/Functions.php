<?php
use App\Config;

function base_url($url = '')
{
  return Config::$URL . $url;
}