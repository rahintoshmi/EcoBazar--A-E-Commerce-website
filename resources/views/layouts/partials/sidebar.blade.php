{{-- <li>
                        <a href="javascript:;" class="side-menu side-menu--active side-menu--open">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title">
                                Dashboard 
                                <div class="side-menu__sub-icon"> <i data-feather="chevron-down"></i> </div>
                            </div>
                        </a>
                        <ul class="side-menu__sub-open">
                            <li>
                                <a href="index.html" class="side-menu side-menu--active side-menu--open">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-2.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="side-menu">
                                    <div class="side-menu__icon"> <i data-feather="activity"></i> </div>
                                    <div class="side-menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
</li> --}}


                    <li>
                        <a href="{{route('dashboard')}}" class="side-menu  {{ getActiveLink('dashboard')}}">
                            <div class="side-menu__icon"> <i data-feather="home"></i> </div>
                            <div class="side-menu__title"> Dashboard </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('category.index')}}" class="side-menu  {{ getActiveLink('category.*')}}">
                            <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                            <div class="side-menu__title"> Category </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{route('products.index')}}" class="side-menu  {{ getActiveLink('products.*')}}">
                            <div class="side-menu__icon"> <i data-feather="layers"></i> </div>
                            <div class="side-menu__title"> Products </div>
                        </a>
                    </li>