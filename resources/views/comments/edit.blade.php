@extends('layout.main')
@section('title','Edit Comment')

@section('content')
<form action="/comments/{{$c->id}}" method="post" role="form">
  <input type="hidden" name="_method" value="PUT" />
    {{csrf_field()}}
    <legend>Edit Comment </legend>
    <div class="form-group">
        <label for=""></label>
        <input type="text" class="form-control" name="name" id="name" value={{$c->name}} required>
    </div>

    <div class="form-group">
        <label for=""></label>
        <textarea type="text" class="form-control" rows="4" name="comment" required> {{$c->comment}}  </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Edit Comment</button>
</form>



@endsection
    
