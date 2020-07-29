(function ($) {
"use strict"; // Start of use strict

// Close any open menu accordions when window is resized below 768px
$(window).resize(function () {
if ($(window).width() < 768) {
$('.sidebar .collapse').collapse('hide');
};
});

function load_unseen_notification2(view = '')
{
$.ajax({
url:"../notification2.php",
method:"POST",
data:{view:view},
dataType:"json",
success:function(data)
{
$('.notify').html(data.notification);
if(data.unseen_notification > 0)
{
$('.badge-counter').html(data.unseen_notification);
}
}
});
}
load_unseen_notification2();

// load new notifications
$(document).on('click', '#alertsDropdown', function(){
 $('.badge-counter').html('');
 load_unseen_notification2('yes');
});
setInterval(function(){
 load_unseen_notification2();;
}, 5000);


function load_unseen_notification(view = '')
{
$.ajax({
url:"notification.php",
method:"POST",
data:{view:view},
dataType:"json",
success:function(data)
{
$('.notify').html(data.notification);
if(data.unseen_notification > 0)
{
$('.badge-counter').html(data.unseen_notification);
}
}
});
}
load_unseen_notification();

// load new notifications
$(document).on('click', '#alertsDropdown', function(){
 $('.badge-counter').html('');
 load_unseen_notification('yes');
});
setInterval(function(){
 load_unseen_notification();;
}, 5000);


setTimeout(function(){
$('#leadboard').css('display','none');
}, 15000);

$(".specify").change(function(){
if ($(this).val() == 'others')
{
var thisname = $(this).attr( "name" );
$($(this)).replaceWith('<input type="text" name="'+thisname+'" class="form-control" placeholder="Please Specify Here">');
}
});

$("#deleteBtn").on('click',(function() {
var type = $(this).data('type');

if (type === 'cancel') {
showCancelMessage();
}
}));

function showCancelMessage() {

swal({
title: "Are you sure?",
text: "You will not be able explore more with your account, if you cancel your plan!",
type: "warning",
showCancelButton: true,
confirmButtonColor: "#dc3545",
confirmButtonText: "Yes, cancel plan!",
cancelButtonText: "No, retain plan!",
closeOnConfirm: false,
closeOnCancel: false
}, function (isConfirm) {
if(isConfirm) {

var merchant = 1;

$.ajax({
type: "POST",
url: "cancel-subscription.php",
data: {merchant:merchant},
success: function(data){
swal("Cancelled!", "Plan has been cancelled successfully", "success");
}
});
}else {
swal("Retained", "Plan not cancelled :). Enjoy more with faceflyer", "error");
}
});
}

$(".toggle-password").click(function() {

$(this).toggleClass("fa-eye fa-eye-slash");
var input = $($(this).attr("toggle"));
if (input.attr("type") == "password") {
input.attr("type", "text");
} else {
input.attr("type", "password");
}
});

// Scroll to top button appear
$(document).on('scroll', function () {
var scrollDistance = $(this).scrollTop();
if (scrollDistance > 100) {
$('.scroll-to-top').fadeIn();
} else {
$('.scroll-to-top').fadeOut();
}
});

// Smooth scrolling using jQuery easing
$(document).on('click', 'a.scroll-to-top', function (e) {
var $anchor = $(this);
$('html, body').stop().animate({
scrollTop: ($($anchor.attr('href')).offset().top)
}, 1000, 'easeInOutExpo');
e.preventDefault();
});

$(function () {
$("body").on("input propertychange", ".floating-label-form-group", function (e) {
$(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
}).on("focus", ".floating-label-form-group", function () {
$(this).addClass("floating-label-form-group-with-focus");
}).on("blur", ".floating-label-form-group", function () {
$(this).removeClass("floating-label-form-group-with-focus");
});
});

var oneobjowlcarousel = $(".owl-carousel-one");
if (oneobjowlcarousel.length > 0) {
oneobjowlcarousel.owlCarousel({
items: 1,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
autoPlay: 2000,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"]
});
}

var objowlcarousel = $(".owl-carousel-two");
if (objowlcarousel.length > 0) {
objowlcarousel.owlCarousel({
items: 2,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
autoPlay: 2000,
margin: 15,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],
responsive: {
0: {
items: 1
},
479: {
items: 1
},
768: {
items: 1
},
979: {
items: 2
},
1199: {
items: 2
}
}
});
}

var threeobjowlcarousel = $(".owl-carousel-three");
if (threeobjowlcarousel.length > 0) {
threeobjowlcarousel.owlCarousel({
items: 3,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
autoPlay: 2000,
margin: 15,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],

responsive: {
0: {
items: 1
},
479: {
items: 1
},
768: {
items: 2
},
979: {
items: 3
},
1199: {
items: 3
}
}
});
}

var fiveobjowlcarousel = $(".owl-carousel-four");
if (fiveobjowlcarousel.length > 0) {
fiveobjowlcarousel.owlCarousel({
items: 4,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
margin: 15,
autoPlay: 2000,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],
responsive: {
0: {
items: 1
},
479: {
items: 1
},
768: {
items: 2
},
979: {
items: 4
},
1199: {
items: 4
}
}

});
}

var fiveobjowlcarousel = $(".owl-carousel-five");
if (fiveobjowlcarousel.length > 0) {
fiveobjowlcarousel.owlCarousel({
items: 5,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
autoPlay: 2000,
margin: 15,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"],
responsive: {
0: {
items: 1
},
479: {
items: 1
},
768: {
items: 2
},
979: {
items: 4
},
1199: {
items: 5
}
}

});
}

var restaurantslider = $(".restaurant-slider");
if (restaurantslider.length > 0) {
restaurantslider.owlCarousel({
items: 1,
lazyLoad: true,
pagination: false,
loop: true,
dots: false,
autoPlay: 2000,
nav: true,
stopOnHover: true,
navText: ["<i class='icofont-thin-left'></i>", "<i class='icofont-thin-right'></i>"]
});
}

// Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function (event) {
// On-page links
if (
location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
location.hostname == this.hostname
) {
// Figure out element to scroll to
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
// Does a scroll target exist?
if (target.length) {
// Only prevent default if animation is actually gonna happen
event.preventDefault();
$('html, body').animate({
scrollTop: target.offset().top
}, 1000, function () {
// Callback after animation
// Must change focus!
var $target = $(target);
$target.focus();
if ($target.is(":focus")) { // Checking if the target was focused
return false;
} else {
$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
$target.focus(); // Set focus again
};
});
}
}
});

// ===========Select2============
$('select').select2();

// ===========Tooltip============
$('[data-toggle="tooltip"]').tooltip()





// (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
// (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
// m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
// })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
//
// ga('create', 'UA-120909275-1', 'auto');
// ga('send', 'pageview');

})(jQuery); // End of use strict
