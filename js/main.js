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