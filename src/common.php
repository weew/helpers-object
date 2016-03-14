<?php

if ( ! function_exists('safe_clone')) {
    /**
     * Clones a value if it is an object, returns the same value otherwise.
     *
     * @param $value
     *
     * @return mixed
     */
    function safe_clone($value) {
        if (is_object($value)) {
            return clone $value;
        }

        return $value;
    }
}
