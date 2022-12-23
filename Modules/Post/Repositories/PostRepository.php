<?php

namespace Modules\Post\Repositories;
use Illuminate\Support\Str;
use Modules\Post\Entities\PostModel;
use Modules\Post\Repositories\Interfaces\PostRepositoryInterface;

class PostRepository implements PostRepositoryInterface
{
    public function getAll()
    {
        return PostModel::all();
    }

    public function create(array $data)
    {
        // create slug from title
        $data['slug'] = Str::slug($data['title']);
        return PostModel::create($data);
    }

    public function findBySlug($slug)
    {
        return PostModel::where('slug', $slug)->first();
    }

    public function updateBySlug(array $data, $slug)
    {
//        create slug from title
        $data['slug'] = Str::slug($data['title']);
        return PostModel::where('slug', $slug)->update([
            'title' => $data['title'],
            'slug' => $data['slug'],
            'content' => $data['content'],
        ]);
    }

    public  function deleteBySlug($slug)
    {
        return PostModel::where('slug', $slug)->delete();
    }
}
