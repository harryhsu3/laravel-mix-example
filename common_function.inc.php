<?php

/**
 * Get the path to a versioned Mix file.
 *
 * @param  string  $path
 * @param  string  $manifestDirectory
 */
function mix(string $path, string $manifestDirectory = __DIR__ . '/')
{
    $manifestPath = $manifestDirectory . 'mix-manifest.json';
    $manifest = json_decode(file_get_contents($manifestPath), true);

    echo ltrim(
        array_key_exists($path, $manifest) ? $manifest[$path] : $path,
        "/"
    );
}
