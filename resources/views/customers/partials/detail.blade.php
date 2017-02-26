<div class="margin-bottom-20">
    <div class="row">
        {!! Form::label('nama','Jenis Customer',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->jenis}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('nama','Nama Customer',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->nama}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('email','Email',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->email}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('alamat_1','Alamat',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->alamat_1}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('alamat_2','Alamat 2',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->alamat_2}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('propinsi','Propinsi',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->propinsi}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('kota','Kota/Kabupaten',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->kota}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('kecamatan','Kecamatan',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->kecamatan}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('kodepos','Kodepos',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->kodepos}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('phone','Nomor Telepon',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->phone}}
        </div>
    </div>
    <div class="row">
        {!! Form::label('mobile','Nomor Handphone',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9 text-info">
            {{$data->mobile}}
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
    <a class="btn green" href="{{route('customers.index')}}"><i class="fa fa-arrow-left"></i> Kembali</a>
</div>