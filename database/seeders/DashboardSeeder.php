<?php

namespace Database\Seeders;

use Chartello\Models\Dashboard;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DashboardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = Dashboard::create(['name' => 'Sales']);

        $subscriptions->panels()->create([
            'name' => 'Signups',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(created_at) AS x
FROM users
WHERE created_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);

        $subscriptions->panels()->create([
            'name' => 'Subscriptions',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(created_at) AS x
FROM subscriptions
WHERE created_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);

        $subscriptions->panels()->create([
            'name' => 'Trials Ending',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(trial_ends_at) AS x
FROM subscriptions
WHERE trial_ends_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);

        $subscriptions->panels()->create([
            'name' => 'Subscriptions Ending',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(ends_at) AS x
FROM subscriptions
WHERE ends_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);

        $support = Dashboard::create(['name' => 'Support']);

        $support->panels()->create([
            'name' => 'Tickets Opened',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(created_at) AS x
FROM tickets
WHERE created_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);

        $support->panels()->create([
            'name' => 'Tickets Resolved',
            'settings' => [
                'query' => 'SELECT COUNT(*) AS y,
DATE(resolved_at) AS x
FROM tickets
WHERE resolved_at BETWEEN @start AND @end
GROUP BY x
ORDER BY x ASC'
            ]
        ]);
    }
}
