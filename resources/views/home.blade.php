@extends('layouts/app')

@section('title-blog')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro voluptatem quo temporibus magnam quia magni mollitia facere deleniti officia itaque culpa eaque totam, est nobis dignissimos enim repudiandae quam quis.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection