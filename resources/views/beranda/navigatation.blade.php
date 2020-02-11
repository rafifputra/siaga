<div class="navbar navbar-inverse set-radius-zero" >
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand"> 
                <a href="{{url('/home')}}"><img src="{{ asset('assets3/img/samudra.jpg')}}"/></a>
                <a href="{{url('/home')}}"><h1 class="tm-site-title mb-0">SIAGA</h1></a><br>
                <h5 class="tm-company mb-0"> PT YASA WAHANA TIRTA SAMUDERA - SEMARANG</h5>
            </div>
        </div>
        <div class="right-div" style="padding-top: 50px;">
            <div class="pull-right">
                <span class="btn" style="color: #fff; font-size: 14px; height: 32px;
                    background: #00b36b;"> {{auth()->user()->role}} 
                </span> &nbsp; 
                <span style="color: #e0e0d1; font-size: 18px;">
                    {{auth()->user()->name}} &nbsp;  
                    <i class="fa fa-user"></i>
                </span> 
            </div>
        </div>
    </div>
</div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                    Marketing <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="{{url('/sales-activities')}}">Sales Marketing</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                    Master <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="">
                                            User <i class="fa fa-angle-right"></i>
                                        </a>
                                    <ul>
                                        <li><a href="{{url('/user')}}">Account</a></li>
                                        <li><a href="{{url('/customer')}}">Customer</a></li>
                                    </ul>
                                    </li>
                                    
                                     <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="">
                                            Shipyard <i class="fa fa-angle-right"></i></a>
                                     <ul>
                                        <li><a href="{{url('/shipyard')}}">Ships</a></li>
                                        <li><a href="{{url('/shiptype')}}">Ship Type</a></li>
                                        <li><a href="{{url('/slipway')}}">Slipways</a></li>
                                        <li><a href="{{url('/slipwaytype')}}">Slipway Type</a></li>
                                    </ul>   
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">
                                    Admin <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                                    <li role="presentation">
                                        <a role="menuitem" tabindex="-1" href="/logout">keluar</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>