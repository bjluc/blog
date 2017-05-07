@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        
        <div class="panel-heading">
            Create a new category
        </div>
        <div class="panel-body">
            <form action="{{ route('category.store') }}" method="post">
            {{ csrf_field() }}

            <div class="formgroup">
                <label for="title">Name</label>
                <input type="text" name="name" class="form-control">
            </div>
                <br>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Store category
                    </button>
                </div>


            </div>  

            </form>
        
        </div>
    </div>

@stop