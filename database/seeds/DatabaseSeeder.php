<?php

use Illuminate\Database\Seeder;
<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
=======
>>>>>>> origin/master
=======
>>>>>>> origin/master

class DatabaseSeeder extends Seeder
{
    /**
<<<<<<< HEAD
<<<<<<< HEAD
     * データベース初期値設定の実行
=======
     * Seed the application's database.
>>>>>>> origin/master
=======
     * Seed the application's database.
>>>>>>> origin/master
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
<<<<<<< HEAD
        DB::table('attentions')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => bcrypt('password'),
        ]);
        
        // 注意事項データ登録
        factory(App\Attention::class, 50)->create()->each(function ($attention) {
        $attention->posts()->save(factory(App\Post::class)->make());
    });

        // 商品データを全抽出
        $products = App\Attention::all();
        
        // 猫データ登録
        factory(App\Cat::class, 10)
            ->create()
            ->each(function ($cat) use ($attention) {
                $cat->products()->attach(
                    // 1～5個の注意事項を猫にランダムに紐づけ
                    $attention->random(rand(1,5))->pluck('id')->toArray() 
                );
            });
    }
}
=======
        // $this->call(UsersTableSeeder::class);
    }
}
>>>>>>> origin/master
=======
        // $this->call(UsersTableSeeder::class);
    }
}
>>>>>>> origin/master
