<?php

namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post{

    public $title;
    public $exerpt;
    public $date;
    public $body;
    public $slug;

    public function __construct($title, $exerpt, $date, $body, $slug)
    {
        $this->title = $title;
        $this->exerpt = $exerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return collect(File::files(resource_path("posts")))
            ->map(function ($file) {
                $document = YamlFrontMatter::parseFile($file);
                return new Post(
                    $document->matter('title'),
                        $document->exerpt,
                        $document->date,
                    $document->body(),
                    $file->getFilenameWithoutExtension()
                );
            });
        });
     
    }

    public static function find($slug)
    {
        $post = static::all()->firstWhere('slug', $slug);

        if(! $post){
            throw new ModelNotFoundException();
        }
        return $post;
    }
}