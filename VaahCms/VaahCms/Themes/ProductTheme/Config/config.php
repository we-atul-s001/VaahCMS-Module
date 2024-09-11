<?php

return [
    "name"=> "ProductTheme",
    "title"=> "Product Theme",
    "slug"=> "producttheme",
    "thumbnail"=> "https://img.site/p/300/160",
    "excerpt"=> "Theme for Product",
    "description"=> "Theme for Product",
    "download_link"=> "",
    "author_name"=> "producttheme",
    "author_website"=> "https://vaah.dev",
    "version"=> "v0.0.1",
    "is_migratable"=> true,
    "is_sample_data_available"=> true,
    "db_table_prefix"=> "vh_producttheme_",
    "providers"=> [
        "\\VaahCms\\Themes\\ProductTheme\\Providers\\ProductThemeServiceProvider"
    ],
    "aside-menu-order"=> null
];
