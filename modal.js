function modal()
{
	document.getElementById("modal").style.transform='translateX(0%)'; 
}

window.addEventListener('keydown', function(ev) {            
    if (ev.keyCode==27) {
            document.getElementById("modal").style.transform='translateX(-100%)';      
	        document.getElementById("modal").style.transition="1s";   
    }
});

function cerrarventana(){
    document.getElementById("modal").style.transform='translateX(-100%)';      
	document.getElementById("modal").style.transition="0.5s"; 
}