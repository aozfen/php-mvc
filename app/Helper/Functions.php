<?php
use App\Config;

function base_url($url = '')
{
  return Config::$URL . $url;
}

function asset_url($url = '')
{
  return Config::$URL . 'public/' . $url;
}