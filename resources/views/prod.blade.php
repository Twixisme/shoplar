@extends('layouts.default')

@section('title', 'Продукт ')

@section('content')
    <div class="col-md-12">
        <h1>{{ $product->name }}</h1>
        <table class="table">
            <tbody>
            <tr>
                <td>Название:</td>
                <td>{{ $product->name }}</td>
            </tr>
            <tr>
                <td>Описание:</td>
                <td>{{ $product->about }}</td>
            </tr>
            <tr>
                <td>Картинка:</td>
                <td><img src="{{ Storage::url($product->image)}}" height="240px"></td>
            </tr>
            </tr>
            <tr>
                <td>Категория:</td>
                <td>{{ $product->category->name }}</td>
            </tr>
            </tbody>
        </table>
        <form action="{{route('add', $product->id)}}" method="POST">
            @if($product->isAvailable())
                <button type="submit" class="btn btn-primary" role="button">Купить</button>
            @else
                Нет в начилии
            @endif
            @csrf
        </form>
    </div>
@endsection
