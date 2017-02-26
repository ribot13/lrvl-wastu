<div id="tbl-buttons" class="text-right margin-bottom-10"></div>
<table class="dt-tbl table table-bordered table-striped table-hover">
    <thead>
        <tr class="bg-info">
            <th>No</th>
            <th>Merk</th>
            <th>Nama</th>
            <th>Status</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @if($data)
        @foreach($data as $row)
        <tr>
            <td width='1%' nowrap>{{$loop->iteration}}.</td>
            <td width='1%' nowrap>{{$row->merk}}</td>
            <td>{{$row->nama}}</td>
            <td width='1%' nowrap><span class="badge badge-roundless badge-{{$row->_active==1?'success':'default'}}"></span>{{$row->_active==1?'Aktif':'Non Aktif'}}</td>
            <td width='1%' nowrap>
                <a class="btn btn-xs green" href="{{route('jenisproduk.show',$row->id)}}"><i class="fa fa-search"></i></a>
                <a class="btn btn-xs blue" href="{{route('jenisproduk.edit',$row->id)}}"><i class="fa fa-pencil"></i></a>
                {!! Form::open([
                'method' => 'DELETE',
                'route' => ['jenisproduk.destroy', $row->id],
                'class'=>'inline delete',
                ]) !!}
                <button class="btn btn-xs red delete"><i class="fa fa-trash-o"></i></button>
                {!! Form::close() !!}
            </td>
        </tr>
        @endforeach
        @endif
    </tbody>
</table>
<script type="text/javascript">
    $(document).ready(function () {
        jenisproduk.initDT();
    });
</script>