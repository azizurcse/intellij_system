<h1>this is edit page</h1>

{!! Form::model($data,['method'=>'PATCH','action'=>['CrudController@update',$data->id]]) !!}

<div class="form-group">
    {!! Form::label('name','Name:') !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Description:') !!}
    {!! Form::text('description',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('Update Post',['class'=>'btn btn-info']) !!}

    {!! Form::close() !!}
</div>