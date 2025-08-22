<table class="table table-striped table-td-valign-middle table-bordered bg-white">
    <thead>
        <tr>
            <th width="1%">#</th>
            <th>Pickup Date</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
            <th>Package</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ALLDATA as $key => $data)
            <tr>
                <td>{{ $key + 1 + $offset }}
                    <input type="checkbox" name="multiple_delete[]" value="{{ $data->id }}" class="multiple_delete">
                </td>
                <td>{!! date('d M, Y',strtotime($data->when_date)) !!}</td>
                <td>{{ @$data->name }}</td>
                <td>{{ @$data->email }}</td>
                <td>{{ @$data->mobile }}</td>
                <td>{{ @$data->location }}</td>
                <td>{{ @$data->message }}</td>
                <td>
                    {{-- <a href="{{route($view_page_url,['id'=>$data->id])}}" class="btn btn-info btn-xs m-r-2">View</a> --}}
                    <a href="javascript:void(0)" class="btn btn-danger btn-xs text-white delete-btn-ajax" data-id="{{ $data->id }}">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5">
                Total Data: {{ $totalRows }} | Total Pages: {{ $totalPages }}
            </td>
        </tr>
    </tfoot>
</table>
