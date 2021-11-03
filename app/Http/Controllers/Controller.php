<?php

namespace App\Http\Controllers;

use App\Models\MenuItems;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function login(Request $req){
        if(Auth::attempt(['username'=>$req->username,'password'=>$req->password],$req->remember_me)){
            return response(['status'=>"ok"],200);
        }

        return response('',403);

    }
    public function new_link(Request $req){
        $req->validate([
            'link'=>'required',
            'text'=>'required',
            'icon'=>'required'
        ]);
        MenuItems::insert([
            'text'=>$req->text,
            'link'=>$req->link,
            'icon'=>$req->icon,
            'queue'=>$req->queue,
        ]);
    }
    public function update_link(Request $req){
        $req->validate([
            'link'=>'required',
            'text'=>'required',
            'icon'=>'required',
            'id'=>'required'
        ]);
        MenuItems::where('id',$req->id)->update([
            'text'=>$req->text,
            'link'=>$req->link,
            'icon'=>$req->icon,
            'queue'=>$req->queue,
        ]);
    }
    public function remove_link(Request $req){
        $req->validate([
            'id'=>'required'
        ]);
        MenuItems::where('id',$req->id)->delete();
    }
    public function save_settings(Request $req){
        config(['menu.background_color' => $req->bg_color]);
        config(['menu.text_color' => $req->txt_color]);
        config(['menu.active_color' => $req->active_color]);
        config(['menu.icon_size' => $req->icon_size]);
        config(['menu.text_size' => $req->text_size]);
        $fp = fopen(base_path() .'/config/menu.php' , 'w');

        fwrite($fp, '<?php return ' . var_export(config('menu'), true) . ';');

        fclose($fp);

        Artisan::call('cache:clear');
    }
}
