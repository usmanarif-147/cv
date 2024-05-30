<?php

return [

    'pdf' => [
        'enabled' => true,
        'binary'  => base_path('vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltopdf.exe'),
        // 'binary'  => env('WKHTML_PDF_BINARY', 'vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltopdf.exe'),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

    'image' => [
        'enabled' => true,
        'binary'  => base_path('vendor\wemersonjanuario\wkhtmltopdf-windows\bin\64bit\wkhtmltoimage.exe'),
        'timeout' => false,
        'options' => [],
        'env'     => [],
    ],

];
