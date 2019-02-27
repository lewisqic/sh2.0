<?php

/**
 * Helper Functions
 */

function output($type, $text) {
    session()->flash('output', [
        'type' => $type,
        'text' => $text,
    ]);
}

function get_output($json_encode = true) {
    if ( session()->has('output') ) {
        return $json_encode ? json_encode(session('output')) : session('output');
    } else {
        return null;
    }
}