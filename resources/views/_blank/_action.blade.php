<div class="actions">
    <div class="btn-group">
        <a class="btn default btn-xs" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            Menu <i class="fa fa-angle-down"></i>
        </a>
        <ul class="dropdown-menu pull-right">
            @if(is_array($actions))
            @foreach($actions as $action)
            @if(!is_array($action) && $action=='divider')
            <li class="divider"></li>    
            @else
            <li>
                <a href="{{$action['url']}}">
                    {{$action['title']}}
                </a>
            </li>    
            @endif
            @endforeach
            @endif
        </ul>
    </div>
</div>