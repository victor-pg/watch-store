@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($item as $watch)
            <form method="POST" action="/home/edit/{{$watch->id}}" enctype="multipart/form-data">
                @csrf
                <input type="text" placeholder="Nume" value="{{$watch->title}}" class="form-control" name="title" />
                <input type="text" placeholder="Descriere" value="{{$watch->description}}" name="description" class="form-control" />
                <textarea name="content" cols="30" rows="10" placeholder="Continut" class="form-control">{{$watch->text}}</textarea>
                <input type="number" placeholder="Pretul" value="{{$watch->price}}" name="price" class="form-control" />
                <input type="file" name="watch-img" class="form-control" />
                <input type="submit" value="Editeaza" class="form-control btn btn-warning" />
            </form>
            @endforeach
        </div>
    </div>
</div>
@endsection