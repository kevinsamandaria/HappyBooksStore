@extends('HeaderFooter')

@section('navigation')
    @foreach ($navigation as $nav)
        <a class="dropdown-item" href="/category/{{$nav->id}}">{{$nav->category}}</a>
    @endforeach
@endsection

@section('judul')
    Book List
@endsection

@section('content')
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <th scope="row">
                    <a href="/details/{{$book->details->id}}" class="text-dark fw-normal" style="text-decoration: none">
                        {{ $book->title }}
                    </a>
                </th>
                <th class="col-4 text-dark fw-normal">
                    {{ $book->details->author }}
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$books->links()}}
    </div>
@endsection

@section('category')
    @foreach ($navigation as $nav)
    <a href="/category/{{$nav->id}}" style="text-decoration: none">{{$nav->category}}</a>
    <br>
    @endforeach
@endsection


