<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionMethodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'slug' => 'cash',
                'name' => ['en' => 'Cash', 'es' => 'Efectivo'],
            ],
            [
                'slug' => 'credit_card',
                'name' => ['en' => 'Credit Card', 'es' => 'Tarjeta de Crédito'],
            ],
            [
                'slug' => 'bank_transfer',
                'name' => ['en' => 'Bank Transfer', 'es' => 'Transferencia Bancaria'],
            ],
            [
                'slug' => 'mobile_payment',
                'name' => ['en' => 'Mobile Payment', 'es' => 'Pago Móvil'],
            ],
            [
                'slug' => 'check',
                'name' => ['en' => 'Check', 'es' => 'Cheque'],
            ],
            [
                'slug' => 'digital_wallet',
                'name' => ['en' => 'Digital Wallet', 'es' => 'Billetera Digital'],
            ],
            [
                'slug' => 'online_payment',
                'name' => ['en' => 'Online Payment', 'es' => 'Pago en Línea'],  
            ]
        ];

        foreach ($items as $item) {
            \App\Models\TransactionMethodType::create($item);
        }
    }
}
