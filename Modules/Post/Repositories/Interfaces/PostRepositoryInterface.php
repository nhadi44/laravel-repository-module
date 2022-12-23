<?php

namespace Modules\Post\Repositories\Interfaces;

use Modules\Post\Entities\PostModel;

interface PostRepositoryInterface
{
    public function getAll();
    public function create(array $data);
    public function findBySlug($slug);
    public function updateBySlug(array $data, $slug);
    public  function deleteBySlug($slug);
}
