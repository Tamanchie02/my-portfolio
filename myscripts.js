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
var person = document.getElementById('Name');

document.addEventListener("DOMContentLoaded", function() {
 fields.name = document.getElementById('Name');
 fields.surname= document.getElementById('surName');
 fields.idNumber = document.getElementById('idNumber');
    fields.password= document.getElementById('password');
 fields.passwordCheck= document.getElementById('passwordCheck');
})
   function formSubmission(){
       if(fields.value !=="" && fields.value !== null && password.value === passwordCheck){
           alert('You have successfully submitted your details');
       }
       else{
           alert('you haven`t registered') ;
       }

   }

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
    var itemList = document.getElementById("itemList");
    var checkboxes = document.querySelectorAll("input[type = 'checkbox']");
    var selectedFilters = [];
     checkboxes.forEach(function(checkbox){
         if(checkbox.checked){
             selectedFilters.push(checkbox.id);
         }
     });
     var items = itemList.getElementsByTagName("dt");
     for(var i = 0; i< items.length; i++){
        var item =items[i];
        var filter = item.getAttribute("data-filter");
        if(selectedFilters.length == 0 || selectedFilters.includes(filter)){
            item.style.display = "block";
        }else{
            item.style.display ="none";
        }
     }
} 
//Search feature
const SearchInput =document.getElementById("SearchBar");
const SearchButton =document.getElementById("SearchButton");

SearchButton.addEventListener('click', doSearch);

function doSearch(){
  const query =SearchInput.toLowercase();
  const elements =document.querySelectorAll('p, dl, dt, h5');
  elements.forEach(Element => {
      const text = Element.innerText.toLowercase();
      if(text.includes(query)){
          const regex = new RegExp(query, 'gi');
          const highlitedText = text.replace(regex, match => `<span class ="highlight">${match}</span>`);
          Element.innerHTML = highlitedText;
      }
  })
}
// progress bar
var progressBar = document.getElementById("progress");
function updateProgressBar(progress){
    progress.style.width = progress + "%";
    updateProgressBar(50)
}



