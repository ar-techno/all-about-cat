<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>AAC</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#user"><i class="zmdi zmdi-account m-r-5"></i>User</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info">
                            <div class="image"><a href="profile.html"><img src="{{ asset('backend/assets/images/profile_av.jpg')}}" alt="User"></a></div>
                            <div class="detail">
                                <h4>{{Auth::User()->name}}</h4>
                                <small>{{Auth::User()->email}}</small>                        
                            </div>
                            <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>                            
                        </div>
                    </li>
                    @foreach($menu as $menu)
                        @if(!is_null($menu->JoinToAksesMenu))
                            @if($menu->JoinToAksesMenu->akses_group_id == Auth::User()->akses_group_id)
                                @if(!is_null($menu->jenisvendor_id) && $menu->status == 1)
                                    <li>
                                        <a href="@if($menu->link != '-') {{url($menu->link)}} @else # @endif" class="@if(count($menu->GetSubMenu($menu->id)) > 0) menu-toggle @else '' @endif ">
                                    		<div class="demo-google-material-icon">
                                                <i class="material-icons">{{$menu->icon}}</i>
                                                <span class="icon-name">{{$menu->nama}}  </span>
                                        	</div>
                                        </a>
                                    	@if (count($menu->GetSubMenu($menu->id)) > 0)
            		                        <ul class="ml-menu">
                                                @foreach($menu->GetSubMenu($menu->id) as $sm)
                                                    <li>
                                                        <a href="{{url($sm->link.'/'.genereteLink($menu->jenisvendor_id))}}">{{$sm->nama}} </a>
                                                    </li>
                                                @endforeach
            		                        </ul>
                                    	@endif
                                    </li>
                                @else
                                    <li> 
                                        <a href="@if($menu->link != '-') {{url($menu->link)}} @else # @endif" class="@if(count($menu->GetSubMenu($menu->id)) > 0) menu-toggle @else '' @endif">
                                            <div class="demo-google-material-icon">
                                                <i class="material-icons">{{$menu->icon}}</i>
                                                <span class="icon-name">{{$menu->nama}}</span>
                                            </div>
                                        </a>
                                        @if (count($menu->GetSubMenu($menu->id)) > 0)
                                            <ul class="ml-menu">
                                                @foreach($menu->GetSubMenu($menu->id) as $sm)
                                                    <li><a href="{{url($sm->link)}}">{{$sm->nama}}</a></li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li> 
                                @endif
                            @endif
                        @endif
                    @endforeach

                    <li class="header">Adoption</li>
                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Coming soon</span> </a>
                        <ul class="ml-menu">
                            <li><a href="{{url('basic-form-elements.html')}}">Basic Elements</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-pane stretchLeft" id="user">
            <div class="menu">
                <ul class="list">
                    <li>
                        <div class="user-info m-b-20 p-b-15">
                            <div class="image"><a href="profile.html"><img src="{{ asset('backend/assets/images/profile_av.jpg')}}" alt="User"></a></div>
                            <div class="detail">
                                <h4>{{Auth::User()->name}}</h4>
                                <small>{{Auth::User()->email}}</small>                          
                            </div>
                            <a title="facebook" href="#"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="#"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="#"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                            <div class="row">
                                <div class="col-4">
                                    <h5 class="m-b-5">852</h5>
                                    <small>Following</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">13k</h5>
                                    <small>Followers</small>
                                </div>
                                <div class="col-4">
                                    <h5 class="m-b-5">234</h5>
                                    <small>Post</small>
                                </div>                            
                            </div>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p>michael@gmail.com</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ 202-555-0191</p>
                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Photoshop</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Wordpress</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-green " role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%"> <span class="sr-only">87% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>HTML 5</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Angular</div>
                                <div class="progress m-b-20">
                                    <div class="progress-bar l-blush" role="progressbar" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%"> <span class="sr-only">56% Complete</span> </div>
                                </div>
                            </li>
                        </ul>                        
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</aside>