<?php

return [
    'enable' => env('SERVER_INFORMATION_ENABLE', app()->hasDebugModeEnabled() ),
    'url_prefix' => env('SERVER_INFORMATION_URL_PREFIX', 'serverInfo' ),
    'name_prefix' => env('SERVER_INFORMATION_NAME_PREFIX', 'serverInfo' ),
];