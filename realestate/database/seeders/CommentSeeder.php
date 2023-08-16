<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = \App\Models\User::all();
        $realestates = \App\Models\Realestate::all();

        foreach ($users as $user) {
            $realestatesToComment = $realestates->random(rand(1, 3));

            foreach ($realestatesToComment as $realestate) {
                \App\Models\Comment::create([
                    'user_id' => $user->id,
                    'realestate_id' => $realestate->id,
                    'review' => 'A'
                ]);
            }
        }
    }
}
