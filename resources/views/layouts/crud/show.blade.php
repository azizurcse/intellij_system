

<h1>this is view page</h1>



<table class="table" border="1" style="border-collapse: collapse;">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>CreatedAt</th>
        <th>UpdatedAt</th>
        <th>Edit//Delete</th>
      </tr>
    </thead>
    <tbody>
    @foreach($datas as $data)
      <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
        <td>{{$data->created_at->diffForHumans()}}</td>
        <td>{{$data->updated_at->diffForHumans()}}</td>
        <td><a href="{{'crud/'.$data->id.'/edit'}}"><button>Edit Item</button></a>

          {!! Form::open(['method'=>'DELETE','action'=>['CrudController@destroy',$data->id]]) !!}

          {!! Form::submit('Delete Item',['class'=>'btn btn-info']) !!}
          {!! Form::close() !!}
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
