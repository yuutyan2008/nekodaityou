<?php

use Illuminate\Database\Seeder;

class AttentionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        
        $attentions = ['避妊去勢済', '病気になっている', '怪我をしている', '妊娠中お腹が大きい', '子猫', '譲渡対象'];
        foreach ($attentions as $attention) App\Tag::create(['name' => $attention]); 

    }
}
