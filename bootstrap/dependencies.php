<?php

$files = array_merge(
    glob('../configs/dependencies/*.php' ?: []),
    glob('../configs/*.php' ?: [])
);

$configs = array_map(function ($file) {
    return require $file;
}, $files);

return array_merge_recursive(...$configs);

