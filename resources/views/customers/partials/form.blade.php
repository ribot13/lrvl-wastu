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
        {!! Form::label('jenis','Jenis Customer',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::select('jenis',array_merge([''=>'Pilih..'],$jenis_customer),$data?$data->jenis:'',['class'=>'form-control input-small']) !!}
            <span class="help-block">
                Pilih jenis customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('nama','Nama Customer',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('nama',$data?$data->nama:'',['class'=>'form-control input-xlarge','placeholder'=>'John Doe']) !!}
            <span class="help-block">
                Masukkan nama customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('email','Email',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::email('email',$data?$data->email:'',['class'=>'form-control input-medium','placeholder'=>'John Doe']) !!}
            <span class="help-block">
                Masukkan email customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('alamat_1','Alamat',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('alamat_1',$data?$data->alamat_1:'',['class'=>'form-control input-xlarge','placeholder'=>'Jl. Pomade']) !!}
            <span class="help-block">
                Masukkan alamat customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('alamat_2','Alamat 2',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('alamat_2',$data?$data->alamat_2:'',['class'=>'form-control input-xlarge','placeholder'=>'Apt.11 Lantai 13']) !!}
            <span class="help-block">
                Masukkan alamat tambahan customer (jika ada).
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('propinsi','Propinsi',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('propinsi',$data?$data->propinsi:'',['class'=>'form-control input-medium','placeholder'=>'Jawa Barat']) !!}
            <span class="help-block">
                Masukkan propinsi.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('kota','Kota/Kabupaten',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('kota',$data?$data->kota:'',['class'=>'form-control input-medium','placeholder'=>'Kota Cimahi']) !!}
            <span class="help-block">
                Masukkan kota.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('kecamatan','Kecamatan',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('kecamatan',$data?$data->kecamatan:'',['class'=>'form-control input-medium','placeholder'=>'Cimahi Tengah']) !!}
            <span class="help-block">
                Masukkan kecamatan customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('kodepos','Kodepos',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('kodepos',$data?$data->kodepos:'',['class'=>'form-control input-xsmall','placeholder'=>'40123']) !!}
            <span class="help-block">
                Masukkan kodepos customer.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('phone','Nomor Telepon',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('phone',$data?$data->phone:'',['class'=>'form-control input-medium','placeholder'=>'0226612345']) !!}
            <span class="help-block">
                Masukkan nomor telepon PSTN.
            </span>
        </div>
    </div>
    <div class="form-group">
        {!! Form::label('mobile','Nomor Handphone',['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
            {!! Form::text('mobile',$data?$data->mobile:'',['class'=>'form-control input-medium','placeholder'=>'081234567']) !!}
            <span class="help-block">
                Masukkan nomor telepon Seluler.
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