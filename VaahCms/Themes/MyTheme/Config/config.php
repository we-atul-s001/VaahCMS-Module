<?php

return [
    "name"=> "MyTheme",
    "title"=> "Theme for vaahcms",
    "slug"=> "mytheme",
    "thumbnail"=> "https://img.site/p/300/160",
    "excerpt"=> "Theme for testing purpose",
    "description"=> "Theme for testing purpose",
    "download_link"=> "",
    "author_name"=> "mytheme",
    "author_website"=> "https://vaah.dev",
    "version"=> "v0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_mytheme_",
    "providers"=> [
        "\\VaahCms\\Themes\\MyTheme\\Providers\\MyThemeServiceProvider"
    ],
    "aside-menu-order"=> null
];
