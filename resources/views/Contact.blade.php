@extends('HeaderFooter')

@section('navigation')
    @foreach ($navigation as $nav)
        <a class="dropdown-item" href="/category/{{$nav->id}}">{{$nav->category}}</a>
    @endforeach
@endsection

@section('judul')
    Contact
@endsection

@section('content')
    <h3>Store Address:</h3>
    <p>Jalan Pembangunan baru Raya, Kompleks Pertokoan Emerald Blok III /12 Bintaro, Tanggerang Selatan Indonesia</p>

    <h3>Open Daily:</h3>
    <p>08:00 - 20:00</p>

    <h3>Contact</h3>
    <p>Phone: 021-123456789</p>
    <p>Email: happybookstore@happy.com</p>
@endsection

@section('category')
    @foreach ($navigation as $nav)
    <a href="/category/{{$nav->id}}" style="text-decoration: none">{{$nav->category}}</a>
    <br>
    @endforeach
@endsection


