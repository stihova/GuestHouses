<h2>create</h2>
<table>
    <tr>
        <td>




            {{$errors->first('tittle')}}
            <form method="post" action="{{url('houses')}}">
                {{csrf_field()}}
                <input type="text" placeholder="title" name="houseName">
                <input type="submit" class="btn btn-primary">

            </form>
        </td>
    </tr>
</table>