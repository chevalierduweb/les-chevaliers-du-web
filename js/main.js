/*---Countdown----*/
'use strict';

var countDownDate = new Date("Sep 5, 2018 15:37:25").getTime();


var x = setInterval(function() {


    var now = new Date().getTime();


    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 120 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);


    document.getElementById("countdown").innerHTML = '<div class="col-md-3 block"> <span>' + days + " </br></span>jours</div>" + '<div class="col-md-3 block"> <span>' + hours + " </br></span>heures</div>"
    + '<div class="col-md-3 block"> <span>' + minutes + " </br></span>minutes</div> " + '<div class="col-md-3 block"><span>' + seconds + " </br></span>secondes</div> ";

    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);

/*------Contact-form--------*/
function validateForm()
{
    var a=document.forms["Form"]["nom"].value;
    var c=document.forms["Form"]["email"].value;
    var d=document.forms["Form"]["objet"].value;
    var e=document.forms["Form"]["message"].value;
    if (a==null || a=="",c==null || c=="",d==null || d=="", e==null || e=="")
    {
        alert('Merci de remplir tous les champs.');
        return false;
    } else if (e.length<15) {
            alert('Le message doit contenir au moins 15 charactéres.');
            return false;
        }
};

$(document).ready(function() {
  $(function () {
   $('[data-toggle="popover"]').popover()
   $('.popover-dismiss').popover({
   trigger: 'focus'
   });
 });
});
