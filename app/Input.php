<?php
/**
 * Input: Get ve Post'daki değerleri almamızı sağlar
 *
 * @author Ahmet Özfen <ahmetozfen@gmail.com>
 */

namespace App;

class Input 
{
  
  /**
   * Get: Get'de ki değeri alır.
   * @access public
   * @param string $name
   * @return boolen|string|array
   */
  public static function get($name)
  {
    if (isset($_GET[$name])) {
      if (is_array($_GET[$name])) {
        return array_map(function($item){
          return self::filterUrl($item);
        }, $_GET[$name]);
      }
      return self::filterUrl($_GET[$name]);
  
    }
    return false;
  }

  /**
   * Post: Post'da ki değeri alır.
   * @access public
   * @param string $name
   * @return boolen|string|array
   */
  public static function post($name)
  {
    if (isset($_POST[$name])) {
      if (is_array($_POST[$name])) {
        return array_map(function($item){
          return self::filterUrl($item);
        }, $_POST[$name]);
      }
      return self::filterUrl($_POST[$name]);
    }
    return false;
  }

  /**
   * Filter Url: Post veya Get'de ki değerleri kontrol eder
   * @access private
   * @param string $val
   * @return string
   */
  private static function filterUrl($val)
  {
    return htmlspecialchars(trim($val));
  }
}
