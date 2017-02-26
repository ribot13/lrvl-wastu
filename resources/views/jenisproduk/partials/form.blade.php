{!! Form::open([
'route' => $form_action,
'class'=>'form-horizontal',
'method'=>$form_method,
]) !!}
<div class="form-body">
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    <div class="form-group">
        {!! Form::label('merk','Merk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('merk',$data?$data->merk:'',['class'=>'form-control input-medium','placeholder'=>'Mudagaya']) !!}
            <span class="help-block">
                masukkan merk untuk jenis produk ini.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nama','Nama',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('nama',$data?$data->nama:'',['class'=>'form-control input-large','placeholder'=>'Wallet']) !!}
            <span class="help-block">
                masukkan nama jenis produk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('_active','Status',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::select('_active',['1'=>'Aktif','0'=>'Non Aktif'],$data?$data->_active:'',['class'=>'form-control input-small']) !!}
            <span class="help-block">
                Status jenis produk.
            </span>
        </div>
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn blue">Simpan</button>
    <a  class="btn default" href="{{route('jenisproduk.index')}}">Batal</a>
</div>
{!! Form::close() !!}