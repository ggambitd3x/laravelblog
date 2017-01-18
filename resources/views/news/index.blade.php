<?php
/**
 * @var $news \App\Models\News[]
 * @var $newsItem \App\Models\News
 */
?>

@extends('layouts.main')

@section('content')



        @foreach($news as $newsItem)
            @include('fragments.app.news_box', [
                'title' => $newsItem->title,
                'description' => $newsItem->description,
                'index' => $loop->index
            ])
        @endforeach

@endsection
