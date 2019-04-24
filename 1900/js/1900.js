/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {
    var dem = 0;
    var blog = 0;

    $('.menuiconnav').click(function () {
        setTimeout(function () {
            $('.menunav').toggleClass("activemenunav");
            $('.menuiconnav').css({"opacity": "1"});
            $('.buttonclosemenu span').css({"right": "0"});
        }, 400)
        $('.menumobile').css({"display": "block", "left": "0"});

    });
    $('.buttonclosemenu span').click(function () {

        $('.buttonclosemenu span').css({"right": "100%"});
        $('.menunav').toggleClass("activemenunav");
        setTimeout(function () {
            $('.menumobile').css({"left": "-100%"});
            $('.menuiconnav').css({"opacity": "1"});
        }, 350)
    });

});


