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
        // Khu vực Miền Nam: Hồ Chí Minh
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

        Agency::create([
            'name' => 'Hyundai Trường Chinh',
            'region' => 'south',
            'district' => 'Hồ Chí Minh',
            'type' => 'Bán xe hơi',
            'address' => 'Số 6 đường Trường Chinh, phường 15, quận Tân Bình.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Đồng Nai 
        Agency::create([
            'name' => 'Hyundai Ngọc Phát',
            'region' => 'south',
            'district' => 'Đồng Nai',
            'type' => 'Bán xe hơi',
            'address' => 'Số 26/6, Khu phố 1, Bửu Long, TP. Biên Hòa, Đồng Nai',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);
        
        Agency::create([
            'name' => 'BMW Biên Hoà',
            'region' => 'south',
            'district' => 'Đồng Nai',
            'type' => 'Bán xe hơi',
            'address' => 'Số 18 Đường 2A, Phường An Bình, TP. Biên Hòa, Đồng Nai',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Honda Ôtô Biên Hòa',
            'region' => 'south',
            'district' => 'Đồng Nai',
            'type' => 'Bán xe hơi',
            'address' => 'B04 Khu Công Nghiệp Amata, Long Bình, TP. Biên Hòa, Đồng Nai',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Mazda Biên Hòa',
            'region' => 'south',
            'district' => 'Đồng Nai',
            'type' => 'Bán xe hơi',
            'address' => '19 Đường 2A, An Bình, TP. Biên Hòa, Đồng Nai',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Tây Ninh
        Agency::create([
            'name' => 'FORD TÂY NINH',
            'region' => 'south',
            'district' => 'Tây Ninh',
            'type' => 'Bán xe hơi',
            'address' => 'Số 224-226 Quốc Lộ 22B,Khu phố Hiệp Trường, Hiệp Tân, Hoà Thành, Tây Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'VinFast Tây Ninh 3S',
            'region' => 'south',
            'district' => 'Tây Ninh',
            'type' => 'Bán xe hơi',
            'address' => 'Tầng L1, TTTM Vincom Plaza Tây Ninh, Số 444, Đường 30/4, Khu Phố 1, Phường 3, Thành Phố Tây Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'TOYOTA TÂY NINH',
            'region' => 'south',
            'district' => 'Tây Ninh',
            'type' => 'Bảo dưỡng',
            'address' => '50 Hoàng Lê Kha ,P3. TP Tây Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Hyundai TÂY NINH',
            'region' => 'south',
            'district' => 'Tây Ninh',
            'type' => 'Bảo dưỡng',
            'address' => 'Số 21 Đường 30/4, Khu phố 4, Tp. Tây Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Bình Dương
        Agency::create([
            'name' => 'Showroom Mazda Bình Dương',
            'region' => 'south',
            'district' => 'Bình Dương',
            'type' => 'Bán xe hơi',
            'address' => 'KP. Bình Giao, P.Thuận Giao, TP. Thuận An, Bình Dương',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Mercedes-Benz Bình Dương',
            'region' => 'south',
            'district' => 'Bình Dương',
            'type' => 'Bán xe hơi',
            'address' => 'Số 4 Đại lộ Bình Dương, Thị Xã Thuận An, Bình Dương',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Bình Dương Ford',
            'region' => 'south',
            'district' => 'Bình Dương',
            'type' => 'Bảo dưỡng',
            'address' => 'Lô C13, Đường Hùng Vương, Khu Liên Hợp, Phường Hòa Phú, TP. Thủ Dầu Một, Tỉnh Bình Dương ( TTHC Thành phố mới Bình Dương)',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'BMW Bình Dương',
            'region' => 'south',
            'district' => 'Bình Dương',
            'type' => 'Bảo dưỡng',
            'address' => '56/9 Đại Lộ Bình Dương, Tổ 15, KP Bình Giao, P Thuận Giao, Thuận An, Bình Dương.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Miền Bắc: Hà Nội
        Agency::create([
            'name' => 'Showroom ô tô Toyota Thăng Long',
            'region' => 'north',
            'district' => 'Hà Nội',
            'type' => 'Bán xe hơi',
            'address' => '316 Đ. Cầu Giấy, Dịch Vọng, Cầu Giấy, Hà Nội, Việt Nam',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.65721157467618!3d10.76262225910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1a0a1a1a1a%3A0x123456789abcdef!2s75%20V%C3%B5%20V%C4%83n%20Ki%E1%BB%87t%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000000!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Showroom ô tô VinFast',
            'region' => 'north',
            'district' => 'Hà Nội',
            'type' => 'Bán xe hơi',
            'address' => 'Showroom Vinfast Times City, Hai Bà Trưng, Hà Nội.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.75000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f2b0b2b2b2b%3A0xabcdef123456789!2s314%20Nguy%E1%BB%85n%20V%C4%83n%20Linh%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000001!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Showroom ô tô Trường Hải (Thaco)',
            'region' => 'north',
            'district' => 'Hà Nội',
            'type' => 'Bán xe hơi',
            'address' => '541 Nguyễn Văn Cừ, Phường Gia Thuỵ, Quận Long Biên, Hà Nội.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Showroom ô tô Hyundai Thành Công',
            'region' => 'north',
            'district' => 'Hà Nội',
            'type' => 'Bán xe hơi',
            'address' => 'Tầng 12, Tòa nhà Thành Công Tower, 79 Dịch Vọng Hậu, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Hà Nội',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Phú Thọ
        Agency::create([
            'name' => 'Hyundai Việt Trì',
            'region' => 'north',
            'district' => 'Phú Thọ',
            'type' => 'Bán xe hơi',
            'address' => 'Đường Hùng Vương, Khu 4, Phường Vân Phú, Thành phố Việt Trì, Tỉnh Phú Thọ',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);
        
        Agency::create([
            'name' => 'VinFast Ô Tô Thành Thành Phát 1 – Việt Trì ',
            'region' => 'north',
            'district' => 'Phú Thọ',
            'type' => 'Bán xe hơi',
            'address' => 'Khu 4, Phường Vân Phú, Thành Phố Việt Trì, Tỉnh Phú Thọ',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Hòa Bình Auto',
            'region' => 'north',
            'district' => 'Phú Thọ',
            'type' => 'Bán xe hơi',
            'address' => '292 Nguyễn Tất Thành, TP. Việt Trì, Tỉnh Phú Thọ',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Kia Phú Thọ ',
            'region' => 'north',
            'district' => 'Phú Thọ',
            'type' => 'Bán xe hơi',
            'address' => 'Tổ 52, Khu 12, đường Nguyễn Tất Thành, phường Thanh Miếu, TP Việt Trì, Phú Thọ.',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Hải Phòng
        Agency::create([
            'name' => 'Việt Phú Luxury Auto',
            'region' => 'north',
            'district' => 'Hải Phòng',
            'type' => 'Bán xe hơi',
            'address' => '513 Võ Nguyên Giáp, Kênh Dương, Lê Chân, Hải Phòng',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);
        
        Agency::create([
            'name' => 'Salon Ôtô Quốc Toản',
            'region' => 'north',
            'district' => 'Hải Phòng',
            'type' => 'Bán xe hơi',
            'address' => '3D P. Hoàng Diệu, Minh Khai, Hồng Bàng, Hải Phòng',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Siêu thị ô tô Quang Hưng Auto',
            'region' => 'north',
            'district' => 'Hải Phòng',
            'type' => 'Bảo dưỡng',
            'address' => '247-249-251-257-259 P Lê Thánh Tông, Má Chai, Ngô Quyền, Hải Phòng',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Xe Chất Autohaus',
            'region' => 'north',
            'district' => 'Hải Phòng',
            'type' => 'Bảo dưỡng',
            'address' => 'Lô 11 Đ. Lê Hồng Phong, Đằng Hải, Hải An, Hải Phòng',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        // Khu vực Bắc Ninh
        Agency::create([
            'name' => 'Honda Ôtô Bắc Ninh',
            'region' => 'north',
            'district' => 'Bắc Ninh',
            'type' => 'Bán xe hơi',
            'address' => 'Đường Lê Thái Tổ, Võ Cường, TP. Bắc Ninh, Bắc Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);
        
        Agency::create([
            'name' => 'Hyundai Bắc Ninh',
            'region' => 'north',
            'district' => 'Bắc Ninh',
            'type' => 'Bán xe hơi',
            'address' => 'Đường Lê Thái Tổ, Phường Võ Cường, TP. Bắc Ninh, Bắc Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Toyota Bắc Ninh',
            'region' => 'north',
            'district' => 'Bắc Ninh',
            'type' => 'Bảo dưỡng',
            'address' => 'Lô A, đường Lê Thái Tổ, Võ Cường, TP. Bắc Ninh, Bắc Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);

        Agency::create([
            'name' => 'Kia Bắc Ninh',
            'region' => 'north',
            'district' => 'Bắc Ninh',
            'type' => 'Bảo dưỡng',
            'address' => 'Số 9 Đường Lê Thái Tổ, Võ Cường, TP. Bắc Ninh, Bắc Ninh',
            'google_map_embed' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.3725255854763!2d106.72000007467618!3d10.77000025910425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f3c0c3c3c3c%3A0xabcdefabcdef1234!2s250%20L%C6%B0%C6%A1ng%20%C4%90%E1%BB%8Bnh%20C%E1%BB%A7a%2C%20H%E1%BB%93%20Ch%C3%AD%20Minh!5e0!3m2!1svi!2s!4v1690000000002!5m2!1svi!2s',
        ]);
    }
}
