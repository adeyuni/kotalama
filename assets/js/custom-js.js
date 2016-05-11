
/*Menu-toggle*/
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper-right").toggleClass("active");
});

$("#menu-close").click(function(e) {
    e.preventDefault();
    $("#sidebar-wrapper-right").toggleClass("active");
});
// $("#menu-toggle").click(function(e) {
//     e.preventDefault();
//     $("#sidebar-wrapper-right").toggleClass("active");
// });


/*Scroll Spy*/
$('body').scrollspy({ target: '#spy', offset:80});

/*Smooth link animation*/
// $('a[href*=#]:not([href=#])').click(function() {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

//         var target = $(this.hash);
//         target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//         if (target.length) {
//             $('html,body').animate({
//                 scrollTop: target.offset().top
//             }, 1000);
//             return false;
//         }
//     }
// });


$body = $("body");
$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});



// this script used to confirm 

function confirmDelete(a){
    return confirm('Are you sure?'+a);
}

