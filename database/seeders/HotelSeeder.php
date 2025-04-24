<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbhotel')->insert([
            [
                'name' => 'Moon Bay Nha Trang',
                'location' => 'Nha Trang',
                'image' => '/images/Huy/hotel_huy/hotel1.png',
                'description' => 'Located on Hon Tre Island, Moon Bay Nha Trang offers a peaceful escape with lush gardens, private beachfront, and a world-class spa. Ideal for honeymooners and families looking for luxury and tranquility.'
            ],
            [
                'name' => 'Moon Bay Phu Quoc',
                'location' => 'Phu Quoc',
                'image' => '/images/Huy/hotel_huy/hotel2.png',
                'description' => 'An all-villa resort where spa treatments are included in your stay. Located on Vung Bau beach, Moon Bay Phu Quoc is surrounded by lush forests and peaceful coastline, offering pure relaxation in nature.'
            ],
            [
                'name' => 'Moon Bay Da Nang',
                'location' => 'Da Nang',
                'image' => '/images/Huy/hotel_huy/hotel3.png',
                'description' => 'A luxury retreat nestled in the hills of the Son Tra Peninsula, this resort combines traditional Vietnamese architecture with modern comforts. Guests can enjoy panoramic ocean views and Michelin-starred dining.'
            ],
            [
                'name' => 'Moon Bay Con Dao',
                'location' => 'Con Dao',
                'image' => '/images/Huy/hotel_huy/hotel4.png',
                'description' => 'An eco-friendly, all-villa resort on a secluded island, Moon Bay Con Dao offers barefoot luxury with a strong commitment to sustainability. Perfect for those who seek privacy, serenity, and nature.'
            ],
            [
                'name' => 'Moon Bay Cam Ranh',
                'location' => 'Cam Ranh',
                'image' => '/images/Huy/hotel_huy/hotel5.png',
                'description' => 'This beachfront resort boasts colonial-era architecture, lush tropical gardens, and a peaceful private beach. Moon Bay Cam Ranh offers exceptional Vietnamese hospitality with a blend of tradition and modernity.'
            ],
            [
                'name' => 'Moon Bay Ho Tram',
                'location' => 'Ho Tram',
                'image' => '/images/Huy/hotel_huy/hotel6.png',
                'description' => 'Surrounded by tropical forests and facing the South China Sea, Moon Bay Ho Tram offers features elegant rooms and villas, multiple restaurants, and a tranquil spa. A perfect weekend escape from Saigon.'
            ],
            [
                'name' => 'Moon Bay Ninh Thuan',
                'location' => 'Ninh Thuan',
                'image' => '/images/Huy/hotel_huy/hotel7.png',
                'description' => 'Perched above Vinh Hy Bay, Moon Bay Ninh Thuan offers stunning ocean views, wellness retreats, and minimalist luxury. Blending into its natural surroundings, it’s a haven for discerning travelers seeking peace and privacy.'
            ],
            ['name' => 'Moon Bay Nam Du',
                'location' => 'Nam Du',
                'image' => '/images/Huy/hotel_huy/hotel8.png',
                'description' => 'Nestled along the pristine shores of Nam Du, Moon Bay Hotel is a boutique beachfront retreat that blends captivating design, exquisite world-class cuisine, and unparalleled personalized service. Renowned for its commitment to eco-friendly practices and the heartfelt warmth of Vietnamese hospitality, Moon Bay offers an idyllic escape where guests can immerse themselves in serenity and sustainable luxury.'
            ],
            [
                'name' => 'Moon Bay Hon Son',
                'location' => 'Hon Son',
                'image' => '/images/Huy/hotel_huy/hotel9.png',
                'description' => 'Nestled along the pristine shores of Hon Son, Moon Bay Hotel offers a boutique beachfront sanctuary, seamlessly blending refined design, exceptional gourmet cuisine, and tailored service. Renowned for its dedication to eco-friendly practices and the authentic warmth of Vietnamese hospitality, Moon Bay provides a serene getaway where guests can unwind amidst breathtaking natural beauty and sustainable elegance.'
            ]
            ]);
    }
}
