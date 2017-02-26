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
        {!! Form::label('kode','Kode Produk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('kode',$data?$data->kode:'',['class'=>'form-control input-small','placeholder'=>'MDGY-001']) !!}
            <span class="help-block">
                Masukkan kode barang.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('merk','Merk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('merk',$data?$data->merk:'',['class'=>'form-control input-xlarge','placeholder'=>'Mudagaya']) !!}
            <span class="help-block">
                Masukkan merk produk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('jenis','Jenis',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('jenis',$data?$data->jenis:'',['class'=>'form-control input-xlarge','placeholder'=>'Evory']) !!}
            <span class="help-block">
                Masukkan jenis produk sesuai dengan merk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nama','Nama Produk',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('nama',$data?$data->nama:'',['class'=>'form-control input-xlarge','placeholder'=>'Tirtanara']) !!}
            <span class="help-block">
                Masukkan nama produk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('_active','Status',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::select('_active',['1'=>'Aktif','0'=>'Non Aktif'],$data?$data->_active:'',['class'=>'form-control input-small']) !!}
            <span class="help-block">
                Status customer.
            </span>
        </div>
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn blue">Simpan</button>
    <a  class="btn default" href="{{route('customers.index')}}">Batal</a>
</div>
{!! Form::close() !!}