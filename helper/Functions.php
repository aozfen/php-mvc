<?php

function __($key)
{
  $lang = new Language;
  $val = $lang->getLang($key);
  return $val;
}

function filterUrl($str){
  return htmlspecialchars(trim($str));
}


function get($name){
  if (isset($_GET[$name])) {
    if (is_array($_GET[$name])) {
      return array_map(function($item){
        return filterUrl($item);
      }, $_GET[$name]);
    }
    return filterUrl($_GET[$name]);

  }
  return false;
}

function post($name){
  if (isset($_POST[$name])) {
    if (is_array($_POST[$name])) {
      return array_map(function($item){
        return filterUrl($item);
      }, $_POST[$name]);
    }
    return filterUrl($_POST[$name]);
  }
  return false;
}

