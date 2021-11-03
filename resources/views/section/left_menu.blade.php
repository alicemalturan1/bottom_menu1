@php
    $rank = \App\Http\Controllers\UserController::rank(\Illuminate\Support\Facades\Auth::user()->user_rank);
    @endphp
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
                <img src="{{\Illuminate\Support\Facades\Auth::user()->avatar}}" alt="" class="avatar-md mx-auto rounded-circle">
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark fw-medium font-size-16">{{\Illuminate\Support\Facades\Auth::user()->name." ".\Illuminate\Support\Facades\Auth::user()->surname}}</a>
                <p class="text-body mt-1 mb-0 font-size-14"><span class="badge text-{{$rank["badge-color"]}} bg-gradient p-2 bg-soft-{{$rank["badge-color"]}}">{{$rank["rank-name"]}}</span></p>

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">İstatistik</li>

                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-airplay"></i><span class="badge rounded-pill bg-info float-end">2</span>
                        <span>Genel</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="index.html">Dashboard 1</a></li>
                        <li><a href="index-2.html">Dashboard 2</a></li>
                    </ul>
                </li>
                <li class="menu-title">Blog</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">

                        <i class="mdi mdi-creation"></i><span class="badge rounded-pill bg-info float-end">1</span>
                        <span>Oluştur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'create_blog_post'])}}">Blog Yazısı Oluştur</a></li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i><span class="badge rounded-pill bg-info float-end">5</span>
                        <span>Listele</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'list_blog_posts'])}}">Blog İçerikleri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_blog_categories'])}}">Blog Kategorileri</a></li>


                    </ul>
                </li>
                <li class="menu-title">İçerik</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-creation"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Oluştur</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'create_content'])}}">İçerik Oluştur</a></li>
                        <li><a href="{{route('PanelView',['any'=>'create_content_category'])}}">İçerik Kategorisi Oluştur</a></li>
                        <li><a href="{{route('PanelView',['any'=>'create_show_cases'])}}">İçerik Vitrini Oluştur</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i><span class="badge rounded-pill bg-info float-end">3</span>
                        <span>Listele</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'list_contents'])}}">İçerikler</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_content_categories'])}}">İçerik Kategorileri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_show_cases'])}}">İçerik Vitrinleri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_reports'])}}">Raporlar</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_ratings'])}}">Değerlendirmeler</a></li>
                    </ul>
                </li>
                <li class="menu-title">Web Site</li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-tools"></i><span class="badge rounded-pill bg-info float-end">6</span>
                        <span>Araçlar</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'settings'])}}">Ayarlar</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_sliders'])}}">Slider</a></li>
                        <li><a href="{{route('PanelView',['any'=>'blocks_info'])}}">İçerik Blokları</a></li>
                        <li><a href="{{route('PanelView',['any'=>'maintenance'])}}">Bakım</a></li>
                        <li><a href="{{route('PanelView',['any'=>'g_analytics'])}}">Google Analytics</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_reports'])}}">Demo Modu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="waves-effect">
                        <i class="mdi mdi-format-list-bulleted"></i><span class="badge rounded-pill bg-info float-end">5</span>
                        <span>Listele</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('PanelView',['any'=>'list_support_tickets'])}}">Destek Biletleri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_contacts'])}}">İletişim Formu</a></li>

                        <li><a href="{{route('PanelView',['any'=>'list_topmenu'])}}">Üst Menü Linkleri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_bottom_menu'])}}">Alt Menü Linkleri</a></li>
                        <li><a href="{{route('PanelView',['any'=>'list_users'])}}">Üyeler</a></li>
                    </ul>
                </li>
                <li class="menu-title">Yardım</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="mdi mdi-bug"></i>
                        <span>Geliştirici Desteği</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false">
                        <li>
                            <a href="{{route('PanelView',['any'=>'developer_support'])}}" class=" waves-effect">

                                <span>Destek Bileti Oluştur</span>
                            </a>
                        </li>
                        <li><a href="tasks-kanban.html">Biletler</a></li>
                        <li><a href="tasks-create.html">Create Task</a></li>
                    </ul>
                </li>

                <li>
                    <a href="calendar.html" class=" waves-effect">
                        <i class="mdi mdi-help-circle"></i>
                        <span>Nasıl Yaparım?</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
