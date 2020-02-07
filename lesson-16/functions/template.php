<?php

function get_template(string $template, array $data = []): string
{
    $path = getcwd() . '/views/' . $template . '.phtml';

    if (!file_exists($path)) {
        throw new RuntimeException($path . ' not found!');
    }

    extract($data);

    ob_start();

    include $path;

    return ob_get_clean();
}
