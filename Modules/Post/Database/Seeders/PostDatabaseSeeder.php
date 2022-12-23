<?php

namespace Modules\Post\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Entities\PostModel;

class PostDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PostModel::create([
            'title' => 'Post 1',
            'slug' => 'post-1',
            'content' => 'Content 1',
        ]);

        // $this->call("OthersTableSeeder");
    }
}
