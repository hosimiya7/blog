<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'イケメン&美少女がプログラミングを教えてくれるアプリ作ります',
            'content' => 'プログラミング、始めてみたはいいけれどなかなかモチベが上がらない…。そんなあなたにとっておきのアプリです。作ります。主演はたつみっち。',
        ]);
    }
}
