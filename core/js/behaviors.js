/**
 * Created by Maskim on 22/07/2014.
 */
var clickEventType = (document.ontouchstart!==null) ? 'click' : 'touchstart';
var clickEventEndType = (document.ontouchstart!==null) ? 'click' : 'touchend';

var w = window,
    d = document,
    e = d.documentElement,
    g = d.getElementsByTagName('body')[0],
    width = w.innerWidth || e.clientWidth || g.clientWidth,
    height = w.innerHeight|| e.clientHeight|| g.clientHeight;

window.addEventListener("resize", function() {
    width = w.innerWidth || e.clientWidth || g.clientWidth;
    height = w.innerHeight|| e.clientHeight|| g.clientHeight;
});

var isOnTouchMove = false
var firstTouch = {};
/*
$('window').ready(function() {
    $(document).on('touchstart', function (e) {
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        firstTouch.pageY = touch.pageY;
        isOnTouchMove = false;
    });

    $(document).on('touchmove', function (e) {
        var touch = e.originalEvent.touches[0] || e.originalEvent.changedTouches[0];
        if (Math.abs(firstTouch.pageY - touch.pageY) > 5) {
            isOnTouchMove = true;
        }
    });
});
*/

var init;
init = function(){
    smoothScroll.init();
};
init();