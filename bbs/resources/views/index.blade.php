@extends('layout')

@section('content')
    <h1>Hello bbs</h1>
    <p>{{ $message }}</p>
    @include('search')

    <table class='table table-striped table-hover'>
        @foreach ($articles as $article)
            <tr>
                <td>{{ $article->content }}</td>
            </tr>
        @endforeach
    </table>
    
    <div>
        <a href={{ route('article.new') }} class='btn btn-outline-primary'>新規投稿</a>
    </div>
@endsection
