

// var sub = document.getElementById("submit");
// sub.addEventListener("click",sendDataOn);
// var stop = document.getElementById("stop");
// stop.addEventListener("click",sendDataOff);

var a = document.getElementsByClassName("btn");


function sendDataOn() {
      $.ajax({
          
           type: "POST",
           url: 'sub.php',
           data:{
            m1:document.getElementById("slider1").value,
            m2:document.getElementById("slider2").value,
            m3:document.getElementById("slider3").value,
            m4:document.getElementById("slider4").value,
            m5:document.getElementById("slider5").value,
            m6:document.getElementById("slider6").value,
            state:"on"
           },
           success:function(html) {
             alert(html);
           }

      });
      return false;
 }

 function sendDataOff() {
      $.ajax({
          
           type: "POST",
           url: 'sub.php',
           data:{
            m1:document.getElementById("slider1").value,
            m2:document.getElementById("slider2").value,
            m3:document.getElementById("slider3").value,
            m4:document.getElementById("slider4").value,
            m5:document.getElementById("slider5").value,
            m6:document.getElementById("slider6").value,
            state:"off"
           },
           success:function(html) {
            alert(html);
           }

      });
      return false;
 }
 

a[0].addEventListener("click", function( event ) {
  // highlight the mouseenter target
  event.target.style.borderColor = "blue";

  // reset the color after a short delay
  setTimeout(function() {
    event.target.style.borderColor = "";
  
  }, 500);
}, false);


 $m1 = document.getElementById("slider1").value;
 $m2 = document.getElementById("slider2").value;
 $m3 = document.getElementById("slider3").value;
 $m4 = document.getElementById("slider4").value;
 $m5 = document.getElementById("slider5").value;
 $m6 = document.getElementById("slider6").value;



$("#slider1").change(function () {
    var value = this.value;
    console.log(value);
    $("#box1").val(value);
});

$("#box1").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider1").val(value);
});


$("#slider2").change(function () {
    var value = this.value;
    console.log(value);
    $("#box2").val(value);
});

$("#box2").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider2").val(value);
});

$("#slider3").change(function () {
    var value = this.value;
    console.log(value);
    $("#box3").val(value);
});

$("#box3").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider3").val(value);
});

$("#slider4").change(function () {
    var value = this.value;
    console.log(value);
    $("#box4").val(value);
});

$("#box4").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider4").val(value);
});

$("#slider5").change(function () {
    var value = this.value;
    console.log(value);
    $("#box5").val(value);
});

$("#box5").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider5").val(value);
});

$("#slider6").change(function () {
    var value = this.value;
    console.log(value);
    $("#box6").val(value);
});

$("#box1").change(function () {
    var value = this.value;
    console.log(value);
    $("#slider6").val(value);
});

a[1].addEventListener("click", function( event ) {
  // highlight the mouseenter target
  event.target.style.borderColor = "blue";

  // reset the color after a short delay
  setTimeout(function() {
    event.target.style.borderColor = "";
  
  }, 500);
}, false);
