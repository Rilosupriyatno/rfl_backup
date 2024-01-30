<?php

namespace Database\Seeders\Master;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Master\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'description' => 'None',
        ]);
        $count = 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'description' => 'Produk Jadi',
            'url' => '/administration/katalog/product/',
            'image' => 'assets/icons/chair-wicker.png'
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'description' => 'Bahan Baku Rotan',
            'url' => '/administration/katalog/product/',
            'image' => 'assets/icons/log.png'
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/product/',
            'image' => 'assets/icons/log.png',
            'description' => 'Bahan Baku Pendukung',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/product/',
            'image' => 'assets/icons/drill.png',
            'description' => 'Mesin/Alat Perlengkapan ',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/product/',
            'image' => 'assets/icons/chair-wicker.png',
            'description' => 'Servis Mesin/Alat',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/boxes-piles.png',
            'description' => 'Jasa Olah Bahan Baku',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/pen.png',
            'description' => 'Jasa Desain',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/bars.png',
            'description' => 'Jasa Anyam',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/chair.png',
            'description' => 'Jasa Rangka',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/woven.png',
            'description' => 'Jasa Anyam & Rangka',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/car-painting.png',
            'description' => 'Jasa Powder Coating',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/chair-wicker.png',
            'description' => 'Jasa Cushion',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/product.png',
            'description' => 'Jasa Finishing',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/toolbox.png',
            'description' => 'Sewa Peralatan',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/car-with-a-roof.png',
            'description' => 'Sewa Transportasi',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/warehouse.png',
            'description' => 'Sewa Gudang',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/flag.png',
            'description' => 'Sewa Bendera',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/graduation.png',
            'description' => 'Sertifikasi',
        ]);

        $count += 1;
        Category::create([
            'code' => 'KTR-' . date("ymd") . '-000' . $count,
            'url' => '/administration/katalog/service/',
            'image' => 'assets/icons/profit.png',
            'description' => 'Pembiayaan',
        ]);
    }
}
