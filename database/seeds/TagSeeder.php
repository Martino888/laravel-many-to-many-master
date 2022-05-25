<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obj = ['Venezia', 'Milano', 'Roma', 'Crypto', 'Cani', 'Gatti', 'Cucina'];
        foreach ($obj as $itemTag) {
            Tag::create([
                'name' => $itemTag,
                'slug' => Str::slug($itemTag),
            ]);
        }
    }
}
