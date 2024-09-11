<?php

return [
    "name"=> "User",
    "title"=> "User Management",
    "slug"=> "user",
    "thumbnail"=> "https://img.site/p/300/160",
    "is_dev" => env('MODULE_USER_ENV')?true:false,
    "excerpt"=> "User Management System",
    "description"=> "User Management System",
    "download_link"=> "",
    "author_name"=> "vaah",
    "author_website"=> "https://vaah.dev",
    "version"=> "0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_user_",
    "providers"=> [
        "\\VaahCms\\Modules\\User\\Providers\\UserServiceProvider"
    ],
    "aside-menu-order"=> null
];
