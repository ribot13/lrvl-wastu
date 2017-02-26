<div class="margin-bottom-20">
    <div class="row">
        {!! Form::label('kode','Kode Merk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->kode}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('nama','Nama Merk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->nama}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('deskripsi','Deskripsi',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->deskripsi}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('_active','Status',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->_active==1?'Aktif':'Non Aktif'}}
        </div>
    </div>
</div>
<div>
    <a class="btn green" href="{{route('merk.index')}}"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>