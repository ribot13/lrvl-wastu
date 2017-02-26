<div class="margin-bottom-20">
    <div class="row">
        {!! Form::label('kode','Kode',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->kode}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('merk','Merk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->merk}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('jenis','Jenis',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->jenis}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('nama','Nama',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->nama}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('stok','Stok',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->stok}}
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
    <a class="btn green" href="{{route('product.index')}}"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>