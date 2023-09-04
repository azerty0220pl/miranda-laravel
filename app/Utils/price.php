<?php
if (!function_exists('price')) {
    function price($x, $y)
    {
        return $x * (1 - $y / 100) / 100;
    }
}
?>