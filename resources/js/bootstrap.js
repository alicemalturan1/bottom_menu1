window._ = require('lodash');
var $ = require('jquery');
window.swal = require('sweetalert2');
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');


var remove_alert = swal.mixin({
    toast: true,
});
$(".remove_linkbtn").click(function(){
    var id = $(this).data("id");
    remove_alert.fire({
        "template":"#remove-confirmalert"+id,

    }).then((res)=>{
        if(res.isConfirmed){
            axios.post("/remove_link",{"id":id}).then(()=>{window.location.reload()}).catch(()=>{
                swal.mixin({toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                }).fire({icon:"error",title:"Bir hata oluştu"});
            });
        }
    });
});
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
$(".panel_loginform").submit(function(e){
    e.preventDefault();
    axios.post('/login',$(this).serialize()).then((v)=>{
        $(".panel_loginform").append('<div class="row pt-3"><div class="col-lg-12"><div class="alert alert-success">Başarıyla giriş yapıldı</div></div></div>');
        setTimeout(()=>{window.location.href='/';},1400);
    }).catch(()=>{
        $(".panel_loginform").append('<div class="row pt-3"><div class="col-lg-12"><div class="alert alert-danger">Bir hata oluştu tekrar deneyin</div></div></div>');
        setTimeout(()=>{$(".panel_loginform").children().eq($(".panel_loginform").children().length-1).remove();},1400);
    });
});
$(".new_linkform").submit(function(e){
    e.preventDefault();
    axios.post('/new_link',$(this).serialize()).then((v)=>{
        $(".new_linkform").children().eq(0).append('<div class="row pt-3"><div class="col-lg-12"><div class="alert alert-success">Başarıyla oluştu</div></div></div>');
        setTimeout(()=>{window.location.href='/';},1400);
    }).catch(()=>{
        $(".new_linkform").children().eq(0).append('<div class="row pt-3"><div class="col-lg-12"><div class="alert alert-danger">Bir hata oluştu tekrar deneyin</div></div></div>');
        setTimeout(()=>{$(".new_linkform").children().eq(0).children().eq($($(".new_linkform").children().eq(0)).children().length-1).remove();},1400);
    });
});
$(".update_menuitem-form").submit(function(e){
    e.preventDefault();
    axios.post('/update_link',$(this).serialize()).then((v)=>{
        swal.mixin({toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).fire({icon:"success",title:"Güncellendi"});
    }).catch(()=>{
        swal.mixin({toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).fire({icon:"error",title:"Bir hata oluştu"});
    });
});
$(".update_settings-form").submit(function(e){
    e.preventDefault();
    axios.post('/save_settings',$(this).serialize()).then((v)=>{
        swal.mixin({toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).fire({icon:"success",title:"Güncellendi"});
    }).catch(()=>{
        swal.mixin({toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).fire({icon:"error",title:"Bir hata oluştu"});
    });
});
axios.get('/render_menu').then((v)=>{
    $("body").append(v.data);
});
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });
