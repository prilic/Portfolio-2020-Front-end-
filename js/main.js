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


/* fade effect */
