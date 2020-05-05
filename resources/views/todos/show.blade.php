@extends('layouts.app')

@section('title')
 List - {{ $todo->name   }}
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
            <h1 class="text-center my-5">
                {{ $todo->name }}
            </h1>
    
            <div class="card card-default">
                <div class="card-header">
                    Details 
                    @if($todo->completed == 0)
                    <span class="badge badge-danger">Incomplete</span>
                    @else
                    <span class="badge badge-success">Complete</span>
                    @endif
                </div>
                <div class="card-body">
                    {{ $todo->description }}
                </div>
            </div>
            @if($todo->completed == 0)
            <a href="/todos/{{ $todo->id }}/complete" class="btn btn-success btn-sm my-2">Complete</a>
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
            @else
            <a href="/todos/{{ $todo->id }}/edit" class="btn btn-info btn-sm my-2">Edit</a>
            <a href="/todos/{{ $todo->id }}/delete" class="btn btn-danger btn-sm my-2">Delete</a>
            @endif  
            
        </div>
</div>
@endsection