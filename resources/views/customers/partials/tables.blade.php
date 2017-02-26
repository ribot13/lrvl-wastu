<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Nama</th>
            <th>No. Telp/HP</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @if($data)
        @foreach($data as $row)
        <tr>
            <td width='1%' nowrap>{{$loop->iteration}}.</td>
            <td width='1%' nowrap>{{$row->jenis}}</td>
            <td>{{$row->nama}}</td>
            <td width='1%' nowrap>{{$row->phone.' / '.$row->mobile}}</td>
            <td width='1%' nowrap><span class="badge badge-roundless badge-{{$row->_active==1?'success':'default'}}"></span>{{$row->_active==1?'Aktif':'Non Aktif'}}</td>
            <td width='1%' nowrap>
                <a class="btn btn-xs green" href="{{route('customers.show',$row->id)}}"><i class="fa fa-search"></i></a>
                <a class="btn btn-xs blue" href="{{route('customers.edit',$row->id)}}"><i class="fa fa-pencil"></i></a>
                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['customers.destroy', $row->id],
                'class'=>'inline',
                ]) !!}
                <button class="btn btn-xs red delete"><i class="fa fa-trash-o"></i></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>