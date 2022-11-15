@extends('layouts.app')

@section('title')
    @parent | Админка
@endsection


@section('menu')
    @include('admin.menu')
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="newsCategory">Категория новости</label>
                            <select name="category" id="newsCategory" class="form-control">
                                @forelse($categories as $item)
                                    <option @if ($item['id'] == old('category')) selected
                                            @endif value="{{ $item['id'] }}">{{ $item['title'] }}</option>
                                @empty
                                    <option value="0" selected>Нет категории</option>
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
