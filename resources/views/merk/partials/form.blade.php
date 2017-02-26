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
        {!! Form::label('kode','Kode',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('kode',$data?$data->kode:'',['class'=>'form-control input-small','placeholder'=>'MDGY']) !!}
            <span class="help-block">
                masukkan kode merk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nama','Nama',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('nama',$data?$data->nama:'',['class'=>'form-control input-medium','placeholder'=>'Mudagaya']) !!}
            <span class="help-block">
                masukkan nama merk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('deskripsi','Deskripsi',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('deskripsi',$data?$data->deskripsi:'',['class'=>'form-control','placeholder'=>'Its Me!']) !!}
            <span class="help-block">
                masukkan deskripsi merk.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('_active','Status',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::select('_active',['1'=>'Aktif','0'=>'Non Aktif'],$data?$data->_active:'',['class'=>'form-control input-small']) !!}
            <span class="help-block">
                Status Merk.
            </span>
        </div>
    </div>
</div>
<div class="form-actions">
    <button type="submit" class="btn blue">Simpan</button>
    <a  class="btn default" href="{{route('merk.index')}}">Batal</a>
</div>
{!! Form::close() !!}