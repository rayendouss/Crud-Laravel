@extends('layout.main')
@section('title','Comments')

@section('content')


  


<div class="well">
  <div class="row" >
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
             {{$comment->created_at}}
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            {{$comment->name}}
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            {{$comment->comment}}
        </div>

  </div>
</div>



@endsection