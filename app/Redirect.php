<?php
/**
 * Redirect:
 *
 * @author Ahmet Özfen <ahmet.ozfen@gmail.com>
 */
class Redirect {
    /**
     * To: Redirects to a specific path.
     * @access public
     * @param string $location [optional]
     * @return void
     */
    public static function to($location = "") {
        if ($location) {
            if ($location === 404) {
                header('HTTP/1.0 404 Not Found');
            } else {
                header("Location: " . Config::$URL . $location);
            }
            exit();
        }
    }
}
