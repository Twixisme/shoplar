@extends('layouts.app')

@section('content')
<div class="container">
    <div class="colmd-12">
        <h1>Categogies</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Код</th>
                    <th>Название</th>
                    <th>Действия</th>
                </tr>
                @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->code}}</td>
                    <td>{{$category->name}}</td>
                    <td>
                        <div class="btn-group" role="group">
                            <form id="delete" action="{{ route('categories.destroy', $category) }}" method="POST">
                                <a class="btn btn-success" type="button" href="{{ route('categories.show', $category) }}">Открыть</a>
                                <a class="btn btn-warning" type="button" href="{{ route('categories.edit', $category) }}">Редактировать</a>
                                @csrf
                                @method('DELETE')
                                <input class="delete btn btn-danger" type="button" value="Удалить" data-id={{$category->id}}>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
        <a class="btn btn-succes" type="button" href="{{route('categories.create')}}">Добавить категорию</a>
    </div>

</div>
@endsection
<script
    src="https://code.jquery.com/jquery-3.5.0.min.js"
    integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ="
    crossorigin="anonymous">

</script>
<script>
    $(function() {
        $('.delete').click( function (e) {
            const question = 'Вы уверены?'
            let result = confirm(question);
            if (result) {
                const id = $(this).data('id');
                $( "#delete" ).submit();
            }
        })
    });
</script>
