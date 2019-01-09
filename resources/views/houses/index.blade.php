<h2>index</h2>
<a href="{{ URL::to('photos/create') }}" class="pull-right">Add new house</a>

<table border="5">
    <tr>
        <td>houseName</td>
    </tr>
    @foreach($allPhotos as $key => $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->houseName}}</td>
            <td>{{$value->locationName}}</td>
            <td>{{$value->numberOfRooms}}</td>
            <td>{{$value->numberOfBeds}}</td>
            <td>{{$value->houseType}}</td>
            <td>

                <a class="btn btn-small btn-info" href="{{ URL::to('photo/' .$value->id . '/edit')}}">Edit</a>

                <form action="{{action('HouseController@destroy', $value->id)}}" method="post">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>