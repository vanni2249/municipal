<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InteractionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'phone_call',
                'name' =>
                [
                    'en' => 'Phone Call',
                    'es' => 'Llamada Telefónica',
                ]
            ],
            [
                'slug' => 'text_message',
                'name' => [
                    'en' => 'Text Message',
                    'es' => 'Mensaje de Texto',
                ]
            ],
        ];
        foreach ($items as $item) {
            \App\Models\InteractionType::create($item);
        }
    }
}
