<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 
        Service::create([
            'service_name' => 'Seamstress',
            'image' => 'images/services/seamstress.jpg',
            'slug' => 'seamstress',
            'description' => "Need a special outfit to wear to a specific event or have an outfit you'd like to fix?"
        ]);

        Service::create([
            'service_name' => 'Mechanic',
            'image' => 'images/services/mechanic.jpg',
            'slug' => 'mechanic',
            'description' => "Need help repairing your vehicle or want to service it?"
        ]);

        Service::create([
            'service_name' => 'Barber',
            'image' => 'images/services/barber.jpg',
            'slug' => 'barber',
            'description' => "Want to cut your hair?"
        ]);

        Service::create([
            'service_name' => 'Chef',
            'image' => 'images/services/chef.jpg',
            'slug' => 'chef',
            'description' => "Need help with cooking or want to eat delicious food?"
        ]);

        Service::create([
            'service_name' => 'Driver',
            'image' => 'images/services/driver.jpg',
            'slug' => 'driver',
            'description' => "Want a private driver for long trips?"
        ]);

        Service::create([
            'service_name' => 'Architect',
            'image' => 'images/services/architect.jpg',
            'slug' => 'architect',
            'description' => "Need help designing a house or want a unique home design?"
        ]);

        Service::create([
            'service_name' => 'Wood Craftsman',
            'image' => 'images/services/wood-craftsman.jpg',
            'slug' => 'wood-craftsman',
            'description' => "Need help carving wood or want an interesting wood carving?"
        ]);

        Service::create([
            'service_name' => 'Electronics Repairman',
            'image' => 'images/services/electronics-repairman.jpg',
            'slug' => 'electronics-repairman',
            'description' => "Have a broken electronic item but don't have the money to buy a new one? Just fix it"
        ]);

        Service::create([
            'service_name' => 'Painter',
            'image' => 'images/services/painter.jpg',
            'slug' => 'painter',
            'description' => "Need a guide in painting or want to paint yourself directly?"
        ]);
    }
}
