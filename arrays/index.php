<?php

class Post{
    
    public $title;

    public $published;

    public function __construct($title, $published){

        $this->title = $title;

        $this->published = $published;

    }

}

$posts = [

    new Post('My First Post', true),

    new Post('My Second Post', false),

    new Post('My Third Post', true),

    new Post('My Fourth Post', true),

    new Post('My Fifth Post', false),

];

var_dump($posts);

// array_filters(array, callback/action function)

$unpublishedPosts = array_filter($posts, function ($post){

    return $post->published === false;

});

var_dump($unpublishedPosts);

$publishedPosts = array_filter($posts, function ($post){

    return $post->published === true;

});

var_dump($publishedPosts);

// array_map(callback/action function, array)

$modified = array_map(function ($post){

    $post->published = true;

    return $post;
    
}, $posts);

var_dump($modified);

$modified = array_map(function ($post){

    return ['title' => $post->title];
    
}, $posts);

var_dump($modified);

$titles = array_map(function ($post){

    return $post->title;
    
}, $posts);

var_dump($titles);

// array_column($array, $key)

var_dump(array_column($posts, 'title'));

