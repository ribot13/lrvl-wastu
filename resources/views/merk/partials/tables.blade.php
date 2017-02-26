<table class="table table-bordered table-striped table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @if($data)
        @foreach($data as $row)
        <tr>
            <td width='1%' nowrap>{{$loop->iteration}}.</td>
            <td width='1%' nowrap>{{$row->kode}}</td>
            <td width='1%' nowrap>{{$row->nama}}</td>
            <td>{{$row->deskripsi}}</td>
            <td width='1%' nowrap><span class="badge badge-roundless badge-{{$row->_active==1?'success':'default'}}"></span>{{$row->_active==1?'Aktif':'Non Aktif'}}</td>
            <td width='1%' nowrap>
                <a class="btn btn-xs green" href="{{route('merk.show',$row->id)}}"><i class="fa fa-search"></i></a>
                <a class="btn btn-xs blue" href="{{route('merk.edit',$row->id)}}"><i class="fa fa-pencil"></i></a>
                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['merk.destroy', $row->id],
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