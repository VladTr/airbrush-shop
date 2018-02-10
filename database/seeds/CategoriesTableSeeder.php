<?php
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert([
            'alias' => 'al-2',
            'name' =>'Товар №2',
            'title'=>'Тайтл',
            'description'=>'Описание',
            'price'=>7,
            'image'=>'some image'
        ]);
        DB::table('goods')->insert([
            'alias' => 'al-3',
            'name' =>'Товар №3',
            'title'=>'Тайтл',
            'description'=>'Описание',
            'price'=>88,
            'image'=>'some image'
        ]);
        DB::table('goods')->insert([
            'alias' => 'al-4',
            'name' =>'Товар №14',
            'title'=>'Тайтл',
            'description'=>'Описание',
            'price'=>13,
            'image'=>'some image'
        ]);
    }
}
