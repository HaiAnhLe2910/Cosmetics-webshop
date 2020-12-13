var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slide");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 3500);    
}

var slideIndex = 1;
showDivs(slideIndex);


function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("grid-item-o");
  if (n+4 > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length-4}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
    
    x[slideIndex-1].style.display = "block";
    x[slideIndex].style.display = "block";
    x[slideIndex+1].style.display = "block";
    x[slideIndex+2].style.display = "block";
    x[slideIndex+3].style.display = "block";
    
    
    
}

function Search() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}