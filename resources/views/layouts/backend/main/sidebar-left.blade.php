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
                                <small>@if(Auth::User()->aktif == 1 ) Online @else Offline @endif</small>                          
                            </div>
                            <a title="facebook" href="{{Auth::User()->facebook}}"><i class="zmdi zmdi-facebook"></i></a>
                            <a title="twitter" href="{{Auth::User()->twitter}}"><i class="zmdi zmdi-twitter"></i></a>
                            <a title="instagram" href="{{Auth::User()->instagram}}"><i class="zmdi zmdi-instagram"></i></a>
                            <p class="text-muted">{{Auth::User()->getVendorFirst->alamat}}</p>
                        </div>
                    </li>
                    <li>
                        <small class="text-muted">Email address: </small>
                        <p>{{Auth::User()->email}}</p>
                        <hr>
                        <small class="text-muted">Phone: </small>
                        <p>+ {{Auth::User()->getVendorFirst->hp}}</p>
                        <hr>                  
                    </li>
                </ul>
            </div>
        </div>
    </div>    
</aside>