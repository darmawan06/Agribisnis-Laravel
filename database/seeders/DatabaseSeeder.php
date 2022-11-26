<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(HeaderSeeder::class);
        $this->call(KeunggulanSeeder::class);
        $this->call(TentangKamiSeeder::class);
        $this->call(AlasanMembeliSeeder::class);
        $this->call(GalerisSeeder::class);
        $this->call(KeunggulanProdukSeeder::class);
        $this->call(ProdukJudulSeeder::class);
        $this->call(ProdukSeeder::class);
        $this->call(TestimoniJudulSeeder::class);
        $this->call(TestimonisSeeder::class);
        $this->call(FooterSeeder::class);
        $this->call(PelangganSeeder::class);
        $this->call(ModulSeeder::class);
        $this->call(SuperadminPermission::class);
        $this->call(PointSeeder::class);
        $this->call(LimitTransaksiSeeder::class);
    }
}
