@extends('layouts.app')

@section('content')
<div class="container">
    <a href="/home/add" class="btn btn-success">Adauga</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Imagine</th>
                        <th scope="col">Nume</th>
                        <th scope="col">Descriere</th>
                        <th scope="col">Pret</th>
                        <th scope="col" colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($watches as $item)
                    <tr class="text-center align-middle">
                        <th scope="row" class="align-middle">{{$item->id}}</th>
                        <td class="align-middle">
                            <img src='{{ asset("img/$item->img") }}' class="img-thumbnail img-fluid" alt="watch-image">
                        </td>
                        <td class="align-middle">{{$item->title}}</td>
                        <td class="align-middle">{{$item->description}}</td>
                        <td class="align-middle">{{$item->price}}</td>
                        <td class="align-middle">
                            <form action="/home/delete/{{$item->id}}" method="post">
                                @csrf
                                <input type="submit" class="btn btn-danger"  value="Sterge">
                            </form>
                        </td>
                        <td class="align-middle">
                            <a class="btn btn-warning" href="/home/edit/{{$item->id}}">Modifica</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection