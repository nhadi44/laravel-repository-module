<?php

namespace Modules\Post\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Modules\Post\Repositories\Interfaces\PostRepositoryInterface;


class PostController extends Controller
{
   private PostRepositoryInterface $postRepository;

    public function __construct(PostRepositoryInterface $postRepository)
    {
         $this->postRepository = $postRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view('post::index', compact('posts'));
    }

    public function create()
    {
        return view('post::create');
    }

    public function store(Request $request)
    {
//        create slug from title
        $this->postRepository->create($request->all());
        return redirect()->route('post.index');
    }

    public function show($slug)
    {
        $post = $this->postRepository->findBySlug($slug);
        return view('post::show', compact('post'));
    }

   public function update(Request $request, $slug)
   {
       $this->postRepository->updateBySlug($request->all(), $slug);
       return redirect()->route('post.index', $slug);
   }

    public function delete($slug)
    {
         $this->postRepository->deleteBySlug($slug);
         return redirect()->route('post.index');
    }
}
