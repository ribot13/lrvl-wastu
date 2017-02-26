<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler hidden-phone">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
					<form class="sidebar-search" action="extra_search.html" method="POST">
						<div class="form-container">
							<div class="input-box">
								<a href="javascript:;" class="remove">
								</a>
								<input type="text" placeholder="Search..."/>
								<input type="button" class="submit" value=" "/>
							</div>
						</div>
					</form>
					<!-- END RESPONSIVE QUICK SEARCH FORM -->
				</li>
                @if(count($_navs))
                @foreach($_navs as $nav)
				<li class="{{$loop->last &&  count($_navs)>1?'last':''}} {{$loop->first?'start':''}} {{ Request::segment(1) == $nav->link && $nav->link!='javascript:;'?'active':''}}">
					<a href="{{$nav->has_child==1?$nav->link:URL::to($nav->link)}}">
						<i class="{{$nav->icon}}"></i>
						<span class="title">
							{{$nav->title}}
						</span>
                        @if($nav->has_child==1)
                        <span class="arrow ">
						</span>
                        @endif
					</a>
				</li>
                @endforeach
                @endif
				
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>