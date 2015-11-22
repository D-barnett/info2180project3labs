window.onload = function() {
             document.getElementById("lookup").addEventListener(
                             "click", function(){
                // go out and get result from world.php
                 new Ajax.Request("https://lab-8-and-9-d-barnett.c9users.io/world2.php?lookup=Jamaica",
                       {
                          method: "get",
                          onSuccess: doSomethingWithTheResult
                         });
                  
           });
function doSomethingWithTheResult(data) {
                          alert(data.responseText);
                        }
           };                        
           
/*function myFunction() {
    var x = document.createElement("INPUT");
    x.setAttribute("type", "checkbox");
    document.body.appendChild(x);
}*/