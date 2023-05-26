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
function getGender() {
 return document.querySelector('input[name="gender"]:checked')
}

function isNotEmpty(value) {
 if (value == null || typeof value == 'undefined' ) return false;
 return (value.length > 0);
}
const errorElement = document.getElementById('error');


function isPasswordValid(password) {
 if (password.length > 8) {
 return true;
 }
 return false
}
function fieldValidation(field, validationFunction) {
 if (field == null) return false;

 let isFieldValid = validationFunction(field.value)
 if (!isFieldValid) {
 field.className = 'placeholderRed';
 } else {
 field.className = '';
 }

 return isFieldValid;
}
function isValid() {
 var valid = true;
 
 valid &= fieldValidation(fields.Name, isNotEmpty);
 valid &= fieldValidation(fields.surname, isNotEmpty);
 valid &= fieldValidation(fields.idNumber, isNotEmpty);
 valid &= fieldValidation(fields.password, isPasswordValid);
 valid &= fieldValidation(fields.passwordCheck, isPasswordValid);
 valid &= arePasswordsEqual();

 return valid;
}
function arePasswordsEqual() {
 if (fields.password.value == fields.passwordCheck.value) {
 field.password.className = 'placeholderRed';
 field.passwordCheck.className = 'placeholderRed';
 return true;
 }
 return false
}
class User {
 constructor(name, surname,idNumber, gender) {
 this.name = name;
 this.surname = surname;
 this.idNumber = idNumber;
 this.gender = gender;    
 }
}

function submitContacts(){
    fields.gender = getGender();
    if(isValid()){
        let usr = new User(name.value, surname.value, idNumber.value);
        
        alert(`${usr.name } You have successfully registered.`);
    }
    else{
        alert("There was an error registering, please check your details and try again");
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
