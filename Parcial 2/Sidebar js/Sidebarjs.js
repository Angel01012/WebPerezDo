window.onload=function(){
    document.getElementById("btnMenu").addEventListener("click",function(){
        //console.log("Click en el boton")
        //document.getElementsByClassName("sidebar"[0]);
        console.log(document.getElementById('idSidebar'));
        document.getElementById('idSidebar').classList.toggle("escondido");
//        document.getElementsByClassName("sidebar").classList.toggle("Escondido");
    })
}