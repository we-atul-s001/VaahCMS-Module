<?php
namespace VaahCms\Themes\ProductTheme\Database\Seeds;


use Illuminate\Database\Seeder;
use WebReinvent\VaahCms\Libraries\VaahSeeder;

class SampleDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seeds();
        VaahSeeder::taxonomies(__DIR__.'/json/contact.json');
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    function seeds()
    {

    }


}
