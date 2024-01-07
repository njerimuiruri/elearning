<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $packages = [
            ['name' => 'Free Package', 'description' => 'Access to base topics 1 and 2', 'price' => 0],
            ['name' => 'Standard Package', 'description' => 'Access to topics 1 to 10 for $20/month', 'price' => 20],
            ['name' => 'Premium Package', 'description' => 'Access to everything for $23/month', 'price' => 23],
        ];

        foreach ($packages as $package) {
            Package::create($package);
        }
    }
}
