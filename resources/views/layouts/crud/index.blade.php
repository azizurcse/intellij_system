<h1>this is insert page</h1>

{!! Form::open(['method'=>'POST','action'=>'CrudController@store']) !!}
    <div class="form-group">
            {!! Form::label('name','Name:') !!}
            {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description','Description:') !!}
        {!! Form::text('description',null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
            {!! Form::submit('Create Data',['class'=>'btn btn-primary']) !!}
     </div>
    {!! Form::close() !!}