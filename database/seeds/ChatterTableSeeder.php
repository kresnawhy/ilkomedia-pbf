<?php

use Illuminate\Database\Seeder;

class ChatterTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {

        // CREATE THE USER

        if (!\DB::table('users')->find(1)) {
            \DB::table('users')->insert([
                0 => [
                    'id'             => 1,
                    'name'           => 'Kresna',
                    'avatar'         => 'https://via.placeholder.com/150',
                    'email'          => 'krach22official@gmail.com',
                    'password'       => '$2y$10$uIyz5vYP7cZFR/lsypTx9.MmBvydotfWX1j/ZG4fiqIF/D48a4owy',
                    'remember_token' => '',
                    'created_at'     => '2019-10-11 15:00:00',
                    'updated_at'     => '2016-10-11 16:00:00',
                ],
            ]);
        }

        // CREATE THE CATEGORIES

        \DB::table('chatter_categories')->delete();

        \DB::table('chatter_categories')->insert([
            0 => [
                'id'         => 1,
                'parent_id'  => null,
                'order'      => 1,
                'name'       => 'Mahasiswa',
                'color'      => '#264e86',
                'slug'       => 'mahasiswa',
                'created_at' => null,
                'updated_at' => null,
            ],
            1 => [
                'id'         => 2,
                'parent_id'  => 1,
                'order'      => 1,
                'name'       => 'Ormawa',
                'color'      => '#0074e4',
                'slug'       => 'ormawa',
                'created_at' => null,
                'updated_at' => null,
            ],
            2 => [
                'id'         => 3,
                'parent_id'  => 1,
                'order'      => 2,
                'name'       => 'UKM',
                'color'      => '#74dbef',
                'slug'       => 'ukm',
                'created_at' => null,
                'updated_at' => null,
            ],
            3 => [
                'id'         => 4,
                'parent_id'  => null,
                'order'      => 2,
                'name'       => 'Kepegawaian',
                'color'      => '#f45905',
                'slug'       => 'kepegawaian',
                'created_at' => null,
                'updated_at' => null,
            ],
            4 => [
                'id'         => 5,
                'parent_id'  => 4,
                'order'      => 1,
                'name'       => 'Dosen',
                'color'      => '#fb9224',
                'slug'       => 'dosen',
                'created_at' => null,
                'updated_at' => null,
            ],
            5 => [
                'id'         => 6,
                'parent_id'  => 4,
                'order'      => 2,
                'name'       => 'Tata Usaha',
                'color'      => '#fbe555',
                'slug'       => 'tata_usaha',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
