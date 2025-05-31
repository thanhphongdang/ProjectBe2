<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Oder;
use App\Models\User;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        $userIds = User::pluck('id')->toArray();

        $statuses = [
            'Đã đặt hàng',
            'Đã xác nhận',
            'Đang giao',
            'Đã giao',
            'Đánh giá',
        ];

        foreach ($userIds as $index => $userId) {
            $order = Oder::create([
                'user_id' => $userId,
                'status' => $statuses[$index] ?? 'Đơn hàng đã được giao thành công.',
            ]);

            $order->trackings()->createMany([
                ['status' => 'Đã đặt hàng', 'description' => 'Khách hàng đã đặt', 'time' => now()->subDays(3)],
                ['status' => 'Đã xác nhận', 'description' => 'Đơn hàng đã xác nhận', 'time' => now()->subDays(2)],
                ['status' => 'Đang giao', 'description' => 'Đơn đang được giao', 'time' => now()->subDay()],
                ['status' => 'Đã giao', 'description' => 'Đơn hàng đã được giao thành công.', 'time' => now()],
            ]);
        }
    }
}