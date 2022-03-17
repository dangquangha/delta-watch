<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $data = require(database_path() . '/seeds/data/products.php');

        $prices       = [
            3000000,
            3500000,
            4000000,
            4500000,
            5000000,
            6000000
        ];
        $descriptions = [
            'Theo dõi giấc ngủ, Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Nghe nhạc với tai nghe Bluetooth, Màn hình luôn hiển thị, Gọi điện trên đồng hồ, Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Thay mặt đồng hồ, Nhận cuộc gọi, Tìm điện thoại',
            'Đo nhịp tim, Tính lượng Calories tiêu thụ, Đếm số bước chân, Tính quãng đường chạy, Chế độ luyện tập, Phát hiện té ngã, Báo thức, Nghe nhạc với tai nghe Bluetooth, Gọi điện trên đồng hồ, Từ chối cuộc gọi, Dự báo thời tiết, La bàn, Điều khiển chơi nhạc, Thay mặt đồng hồ',
        ];
        $contents     = [
            'content 1',
            'content 2',
        ];

        $products = [];
        foreach ($data as $product) {
            $products[] = [
                'po_name'        => $product['name'],
                'po_slug'        => Str::slug($product['name']),
                'po_image'       => 'products/' . Str::slug($product['name']) . '.jpg',
                'po_description' => $descriptions[array_rand($descriptions)],
                'po_gender'      => rand(0,2),
                'po_hot'         => rand(0,1),
                'po_content'     => $contents[array_rand($contents)],
                'po_policy'      => 'Bảo hành 1 năm',
                'po_quantity'    => rand(40, 100),
                'po_brand'       => rand(1, 5),
                'po_category'    => rand(5, 28),
                'po_price'       => $prices[array_rand($prices)],
                'po_status'      => 1,
                'created_at'     => now()
            ];
        }

        DB::table('products')->insert($products);
    }
}
