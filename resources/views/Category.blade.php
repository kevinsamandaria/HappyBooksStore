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
@if ($books->isEmpty())
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            <td>No Data</td>
        </tbody>
    </table>
@else
    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr style="transform: rotate(0);">
                <th scope="row">
                    <a href="/details/{{$book->details->id}}" class="text-dark fw-normal" style="text-decoration: none">
                        {{ $book->title }}
                    </a>
                </th>
                <td class="col-6">
                    {{ $book->details->author }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        {{$books->links()}}
    </div>
@endif
@endsection

@section('category')
    @foreach ($navigation as $nav)
    <a href="/category/{{$nav->id}}" style="text-decoration: none">{{$nav->category}}</a>
    <br>
    @endforeach
@endsection
