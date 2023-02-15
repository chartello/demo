<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 200; $i++) {
            Ticket::factory()->create($this->attributes(now()->subDays(rand(0, 90))));
        }
    }

    protected function attributes($createdAt) {
        $attributes = [
            'category' => 'general',
            'status' => 'open',
            'created_at' => $createdAt,
            'resolved_at' => null,
            'agent_id' => 1,
        ];

        $fewDaysLater = $createdAt->copy()->addDays(rand(0, 7));
        $fewDaysLater = $fewDaysLater->isWeekend() ? $fewDaysLater->next('Monday') : $fewDaysLater;
        if(now()->gt($fewDaysLater)) {
            $attributes['status'] = 'resolved';
            $attributes['resolved_at'] = $fewDaysLater;
        }

        return $attributes;
    }
}
