@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Articles</div>

                <div class="panel-body">

                    {!! Form::model($article, array('route'=>['articles.update',$article->id], 'method'=>'PUT')) !!}
                    <div class="form-group">
                        {!! Form::label('title', 'Enter article title') !!}
                        {!! Form::text('title',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('description', 'Enter article description') !!}
                        {!! Form::textarea('description',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::Button('Update',['type'=>'submit','class'=>'form-control'])!!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            @if($errors->all())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                <li >{{ $error }}</li>  
                @endforeach
            </ul>

            @endif
        </div>
    </div>
</div>
@endsection

