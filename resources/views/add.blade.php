@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form method="POST" action="/home/add" enctype="multipart/form-data">
            @csrf
            <input type="text" placeholder="Nume" required class="form-control" name="title" />
            <input type="text" placeholder="Descriere" required name="description" class="form-control" />
            <textarea name="content" cols="30" rows="10" required placeholder="Continut" class="form-control"></textarea>
            <input type="number" placeholder="Pretul" required name="price" class="form-control"/>
            <input type="file" name="watch-img" required class="form-control"/>
            <input type="submit" value="Adauga" required class="form-control btn btn-success" />
            </form>
        </div>
    </div>
</div>
@endsection