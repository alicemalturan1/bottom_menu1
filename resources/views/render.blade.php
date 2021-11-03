<link rel="stylesheet" href="/admin-assets/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/admin-assets/assets/css/remixicon.css">
<style>
    *{
        font-family: Roboto,'sans-serif';
    }
    .container *{
        margin-top: 5px;
        margin-bottom: 5px;
    }
    .menu{
        position: fixed;
        z-index: 1;
        bottom:0;
        display: none;
        background:{{Config::get('menu.background_color');}}
        }
    .menu a:hover{
        text-decoration: none;
    }
    .bottom_navlink_icon{
        font-size: {{Config::get('menu.icon_size')}};
    }
    .bottom_navlink_text{
        font-size: {{Config::get('menu.text_size')}};
    }
    @media (max-width: 986px){
        .menu {
            display: block;
        }
    }
    .active_btmmenu_item{
        color:{{Config::get('menu.active_color')}}!important;
    }


</style>
<div class="menu w-100" style="background-color:'{{Config::get('menu.background_color')}}';">
    <div class="row justify-content-between">
        @foreach(\App\Models\MenuItems::all() as $item)
            <div class="col-{{12/count(\App\Models\MenuItems::all())}} bottom_link " @if(\Illuminate\Support\Facades\Request::url() == $item->link) style="border-top:2px solid {{Config::get('menu.active_color')}};"@endif>
                <a href="@if(\Illuminate\Support\Facades\Request::url() == $item->link) # @else {{$item->link}} @endif" class="w-100 @if(\Illuminate\Support\Facades\Request::url() == $item->link) active_btmmenu_item @endif font-weight-light" style="color:{{Config::get('menu.text_color')}};">
                    <div class="row">
                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <i class="{{$item->icon}} bottom_navlink_icon" ></i>
                        </div>
                        <div class="col-lg-12 text-center bottom_navlink_text">{{$item->text}}</div>
                    </div>
                </a>
            </div>
        @endforeach


    </div>
</div>
