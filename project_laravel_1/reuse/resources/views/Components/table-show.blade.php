 <!-- resources/views/components/offer-table.blade.php -->
 <table class="table">
    <thead>
        <tr>
            @foreach ($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        @foreach ($d as $row)
            <tr>
                @foreach ($columns as $column)
                    <td>{{ $row[$column] }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table> 










{{-- <table class="table">
    <thead>
        <tr>
            @foreach ($columns as $column)
                <th>{{ $column }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        {{-- @foreach ($data as $row)
            <tr>
                @foreach ($columns as $column)
                    <td>{{ $row->{$column} }}</td>
                @endforeach
            </tr>
        @endforeach 
    </tbody>
</table> --}}
