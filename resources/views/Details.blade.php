@extends('HeaderFooter')

@section('navigation')
    @foreach ($navigation as $nav)
        <a class="dropdown-item" href="/category/{{$nav->id}}">{{$nav->category}}</a>
    @endforeach
@endsection

@section('judul')
    {{$category}}
@endsection

@section('content')
    <div class="row">
        <div class="col-8">
            <h3 class="fs-1">{{$details->books->title}}</h3>
            <p class="fs-5">Author: {{$details->author}}</p>
            <p class="fs-5">Publisher/year: {{$details->publisher}} - {{$details->year}}</p>

            <h3 class="fs-1">Description</h4>
            <p class="overflow-auto">{{$details->description}}</p>
        </div>
        <div class="col-4">
            <img src="{{URL::asset('assets/'.$details->dir.'.jpg')}}" alt="" style="height: 250px; margin:10% 0% 0% 20%;">
        </div>
    </div>
@endsection

@section('category')
    @foreach ($navigation as $nav)
    <a href="/category/{{$nav->id}}" style="text-decoration: none">{{$nav->category}}</a>
    <br>
    @endforeach
@endsection


