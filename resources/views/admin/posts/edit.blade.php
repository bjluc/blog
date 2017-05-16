@extends('layouts.app')


@section('content')

@include('admin.includes.errors')

    <div class="panel panel-default">
        
        <div class="panel-heading">
            Edit post: {{ $post->title }}
        </div>
        <div class="panel-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="{{ $post->title }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="featured">Featured</label>
                <input type="file" name="featured" class="form-control">
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        @if($post->category->id == $category->id)
                            selected
                        @endif
                    >{{ $category->name  }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
            <label for="tags">Select tags</label>
                @foreach($tags as $tag)

                <div class="checkbox">
                    <label><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                        @foreach ($post->tags as $t)
                            @if($tag->id == $t->id)
                                checked
                            @endif
                        @endforeach
                    >{{ $tag->tag }}</label>
                </div> 

                @endforeach
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" id="summernote" cols="5" rows="5" class="form-control">{{ $post->content }} </textarea>
            </div>
                <br>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit">
                        Update post
                    </button>
                </div>


            </div>  

            </form>
        
        </div>
    </div>

@stop
@section('styles')
<!-- include summernote css-->
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<!-- include summernote js-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.3/summernote.js"></script>
<script>
     $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
@stop