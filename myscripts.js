// The following are the javascript code for my homepage.
//Slideshow for my projects
var j = 0; 
var images = [];
var time = 3000;

images[0] = "images/calculator.png";
images[1] = "images/git.jpeg";

function changeImg(){
    document.slide.src = images[j];
    if(j < images.length -1){
       j++; 
    }
    else
    j= 0;

setTimeout("changeImg()", time); }

window.onload = changeImg;

//Form validation
var fields = {};

document.addEventListener("DOMContentLoaded", function() {
 fields.name = document.getElementById('Name');
 fields.surname= document.getElementById('surName');
 fields.idNumber = document.getElementById('idNumber');
    fields.password= document.getElementById('password');
 fields.passwordCheck= document.getElementById('passwordCheck');
})

//Smooth scrolling function for my navigation links
const links = document.querySelectorAll(".nav-ul a");
for(const link of links){
    link.addEventListener("click", smoothScroll);
}

function smoothScroll(e){
    e.preventDefault();
    const href = this.getAttribute("href");
    
    document.querySelector(href).scrollIntoView({
        behavior : "smooth"
    });
}
//Greeting feature
document.addEventListener("DOMContentLoaded", function()
{
    var currentDate = new Date();
    var currentHour =currentDate.getHours();
    var greeting;
    if(currentHour >= 0 && currentHour <=12){
        greeting ="GOOD MORNING!!";
    } else if(currentHour >= 12 && currentHour <= 18){
        greeting= "GOOD AFTERNOON!!";
    } else {
        greeting ="GOOD EVENING!!";
    }
    var greetings = document.getElementById("para1");
    greetings.textContent = greeting;
});
//Design for my projects page
//Filtering mechanism for projects
function filterProjects(){
    var filterValues = document.getElementById("filterInput").ariaValueMax.toUpperCase();
    var items = document.getElementById("itemList").getElementsByTagName("dt");
     for(var i =0; i < items.length; i++){
         var items = items[i];
         var text = item.innerText.toUpperCase();

         if (text.indexOf(filterValues) >-1 ) {
             item.style.display = "";
         }else{
             item.style.display = "none"
         }
     }
}

