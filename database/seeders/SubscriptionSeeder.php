<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            Subscription::factory()->create($this->attributes(now()->subDays(rand(0, 90))));
        }

        for ($i = 0; $i < 20; $i++) {
            Subscription::factory()->create($this->attributes(now()->subDays(rand(0, 45))));
        }

        for ($i = 0; $i < 15; $i++) {
            Subscription::factory()->create($this->attributes(now()->subDays(rand(0, 15))));
        }
    }

    protected function attributes($createdAt) {
        $attributes = [
            'status' => 'active',
            'created_at' => $createdAt,
            'trial_ends_at' => null,
            'ends_at' => null,
        ];

        $randomNumber = rand(0, 10);

        if(in_array($randomNumber, [0, 1])) {
            $attributes['trial_ends_at'] = $attributes['created_at']->addMonth();
        }

        else if(in_array($randomNumber, [2])) {
            $attributes['status'] = 'canceled';
            $attributes['ends_at'] = $attributes['created_at']->addDays(rand(20, 100));
        }

        return $attributes;
    }
}
