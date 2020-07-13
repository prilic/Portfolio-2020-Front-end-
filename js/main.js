/* button command */
document.getElementById('container').addEventListener('click',function myFunction() {
    this.classList.toggle("change");
   });

/*Content nav command */
var navBar = document.getElementsByTagName("nav");
navBar[0].style.height = "0%";
document.getElementById('container').addEventListener('click',function controlNav() {
    if(navBar[0].style.height === "0%"){
        navBar[0].style.height = "100%";
    }
    else{
        navBar[0].style.height = "0%";
    }
});


/* scroll fade effect */
window.addEventListener('scroll',function scrollAppear(){
	var introdiv = document.querySelector('#presentation');
	var introPosition = introdiv.getBoundingClientRect().top;
	var screenPosition = window.innerHeight / 1.3;
	
	if(introPosition < screenPosition){
		introdiv.classList.add('intro-appear');
	}
});	

/*Form feed-back*/
(function(){
	var name = document.getElementById("name");
	var mail = document.getElementById("email");
	var object = document.getElementById("object");
	var message = document.getElementById("message");
	var regEmail = /^[a-z0-9-_.]+@[a-z0-9-.]+.[a-z]{2,14}$/i;
	var notification = document.createElement("span");

	name.addEventListener('blur',controlName);
	mail.addEventListener('blur',controleMail);
	object.addEventListener('blur',controlObject);
	message.addEventListener('blur',controleMessage);

	function controlName(){

    if(name.value.length < 3 || name.value == "" || (!/[^a-zA-Z]/.test(name))){
        name.style.borderColor="red";
    }
    else{
        name.style.borderColor="green";
    }
}

function controleMail (){
    if(mail.value.length < 10 || mail.value == "" || (!regEmail.test(mail.value.trim()))){
        mail.style.borderColor="red";
    }
    else{
        mail.style.borderColor="green";
    }
}

function controlObject (){
    if(object.value.length < 10 || object.value == ""){
        object.style.borderColor="red";
    }
    else{
        object.style.borderColor="green";
    }
}

function controleMessage (){
    if(message.value.length < 30 || message.value == ""){
        message.style.borderColor="red";
    }
    else{
        message.style.borderColor="green";
    }
}
	
}());