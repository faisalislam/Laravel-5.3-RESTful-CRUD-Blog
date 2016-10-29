@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(Session::has('message'))
            <div class="alert alert-success">{{ Session::get('message') }}</div>
            @endif
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Action</th>
                        </tr>
                        
                            @foreach($articles as $article)
                            <tr>
                            <td>{{ link_to_route('articles.show',$article->title,[$article->id]) }}</td>
                            <td>
                                {!! Form::open(array('route'=>['articles.destroy',$article->id],'method'=>'DELETE')) !!}
                                {{ link_to_route('articles.edit', 'Edit',[$article->id], ['class'=>'btn btn-primary']) }} 
                                |
                                
                                    {!! Form::button('Delete', ['class'=>'btn btn-danger', 'type'=>'submit']) !!}
                                {!! Form::close() !!}
                            </td>
                            </tr>
                            @endforeach
                        
                    </table>
                </div>
            </div>
            {{ link_to_route('articles.create', 'Add a New Article', null, ['class'=>'btn btn-success']) }}
        </div>
    </div>
</div>
@endsection
