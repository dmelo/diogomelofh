<?php

return array_merge(
    // config.ini will apply both on your local instance and on the mdownhostme
    // instance.
    parse_ini_file(__DIR__ . '/config.ini'),
    [
        // Include your local instance specific configurations here.
        'content_dir' => __DIR__ . '/content/',
    ]
);
