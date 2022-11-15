@extends('layouts.app')

@section('title')
    @parent Категории
@endsection

@section ('menu')
    @include('menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h1>Новости категории  {{ $category }}</h1>
                        @forelse($news as $item)
                            <h2>{{ $item['title'] }}</h2>
                            @if (!$item['isPrivate'])
                                <a href="{{ route('news.show', $item['id']) }}">Подробнее..</a>
                            @endif
                        @empty
                            Нет новостей
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
