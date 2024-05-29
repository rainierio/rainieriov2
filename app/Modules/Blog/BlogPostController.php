<?php

namespace App\Modules\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogPostRequest;
use App\Http\Resources\BlogPostResource;
use App\Modules\Blog\Models\BlogPost;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogPostController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', BlogPost::class);

        return BlogPostResource::collection(BlogPost::all());
    }

    public function store(BlogPostRequest $request)
    {
        $this->authorize('create', BlogPost::class);

        return new BlogPostResource(BlogPost::create($request->validated()));
    }

    public function show(BlogPost $blogPost)
    {
        $this->authorize('view', $blogPost);

        return new BlogPostResource($blogPost);
    }

    public function update(BlogPostRequest $request, BlogPost $blogPost)
    {
        $this->authorize('update', $blogPost);

        $blogPost->update($request->validated());

        return new BlogPostResource($blogPost);
    }

    public function destroy(BlogPost $blogPost)
    {
        $this->authorize('delete', $blogPost);

        $blogPost->delete();

        return response()->json();
    }
}
