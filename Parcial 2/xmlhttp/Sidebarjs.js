window.onload = function(){
    document.getElementById("btnOpc4").addEventListener("click",pedirHeader);
    document.getElementById("btnOpc5").addEventListener("click",iniciarHeader);
    document.getElementById("btnOpc6").addEventListener("click",Salir);
    var head = document.getElementById('heading');
    function pedirHeader() {
        solicitud= new XMLHttpRequest();
        solicitud.onreadystatechange=function () {
            if (solicitud.readyState==4 && solicitud.status == 200) {
            document.getElementById("idSidebar").innerHTML=solicitud.responseText;
            }   
        }
        solicitud.open("GET", "archivo.txt", true);
        solicitud.send();
    }
    function iniciarHeader(){
        console.log("Click en el boton");
        document.getElementById("idSidebar").innerHTML= "<h2>Este es un header Nivel 2 :><h2>";
    }
}