 <!-- resources/views/components/table.blade.php -->
 <table class="table">
    <thead>
        <tr>
            @foreach ($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
            <tr>
                @foreach ($columns as $column)
                    <td>{{ $row[$column] }}</td>
                @endforeach
                <td>
                    <form action="{{route('info.destroy',$row->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{route('info.edit',$row->id)}}" class="btn btn-primary">edit</a>
                    <a href="{{route('info.show',$row->id)}}" class="btn btn-info">show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table> 











