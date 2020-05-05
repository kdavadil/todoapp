@extends('layouts.app')

@section('content')
<h1 class="text-center my-5">New Task</h1>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header">Create New To Do</div>
            <div class="card-body">
            
            @if($errors->any())
                <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach($errors->all() as $error)
                        <li class="list-group-item">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
                </div>
            @endif
                <form action="/store-todos" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" cols="10" rows="5" name="description" placeholder="description"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-success">CREATE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

