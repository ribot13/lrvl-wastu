<div class="portlet box blue">
    <div class="portlet-title">
        <div class="caption">
            <i class="{{$view_icon}}"></i>{{$view_title}}
        </div>
        <div class="tools">
            <a href="#" data-load="{{$url===false?'false':'true'}}" data-url="{{$url!==false?$url:'#'}}" class="reload"></a>
        </div>
        @if($show_action==true)
        @include('jenisproduk._action',['actions'=>$actions])
        @endif
    </div>
    <div class="portlet-body {{$is_form===true?'form':''}}">
        @if($url===false)
        @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
        @endif
        @include($view_module,['data'=>$data])
        @endif()
    </div>
</div>