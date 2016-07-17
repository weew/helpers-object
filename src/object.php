<?php

if ( ! function_exists('sclone')) {
    /**
     * Safely clones a value. If it is an object,
     * it will be cloned, otherwise the same value will be returned.
     *
     * @param $value
     *
     * @return mixed
     */
    function sclone($value) {
        if (is_object($value)) {
            return clone $value;
        }

        return $value;
    }
}
