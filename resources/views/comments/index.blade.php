@extends('layout.main')
@section('title','Comments')

@section('content')

@if(!Auth::guest())
@include('comments.form')
@endif
@if(count($comments)>0)
{{$comments->links()}}
        @foreach($comments as $comment)
        


<div class="well">
  <div class="row" >
         <div >
             {{$comment->created_at}}
         </div>
         <div >
            {{$comment->name}}
            @if(!Auth::guest()&& Auth::user()->isadmin == 1)
        <a href="{{route('comments.edit',$comment->id)}}" class="btn btn-info pull-right">Edit </a>
      @endif  
      </div>
        <div >
        <a href="{{route('comments.show',$comment->id)}}" >
            {{$comment->comment}}
        </a>
        </div>
        @if(!Auth::guest()&& Auth::user()->isadmin == 1)
        <form method="POST" action="{{route('comments.destroy',$comment->id)}}">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn-danger pull-right">Delete </button>
          </form>
       @endif
  </div>
</div>
@endforeach
@endif

@endsection