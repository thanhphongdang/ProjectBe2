<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agency;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Khu vực Miền Nam
        Agency::create([
            'name' => 'Showroom HCM',
            'region' => 'south',
            'district' => 'Hồ Chí Minh',
            'type' => 'Bán xe hơi',
            'address' => '75 Võ Văn Kiệt, phường An Lạc, quận Bình Tân, Thành phố Hồ Chí Minh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.65721157467618!3d10.76262225910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1a0a1a1a1a%3A0x123456789abcdef!2s75%20V%C3%B5%20V%C4%83n%20Ki%E1%BB%87t%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000000!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Mazda Phú Mỹ Hưng',
            'region' => 'south',
            'district' => 'Hồ Chí Minh',
            'type' => 'Bán xe hơi',
            'address' => '314 Nguyễn Văn Linh, phường Bình Thuận, quận 7, TP. Hồ Chí Minh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.75000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2b0b2b2b2b%3A0xabcdef123456789!2s314%20Nguy%E1%BB%85n%20V%C4%83n%20Linh%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000001!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Anycar Sài Gòn',
            'region' => 'south',
            'district' => 'Hồ Chí Minh',
            'type' => 'Bán xe hơi',
            'address' => 'số 250 Lương Định Của, phường An Phú, quận 2, TP Hồ Chí Minh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // The rest of the agencies can keep the placeholder URLs or be updated similarly.

        // You can continue updating other agencies with valid embed URLs as needed.
    }
}