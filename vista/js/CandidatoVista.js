window.onload = function() {
    //submit = document.getElementById("boton");
    //submit.addEventListener("click",getCandidatosNoRegistrados);
    botonRegistrarse = document.getElementById("btnRegistrarse");
    botonRegistrarse.addEventListener("click",setCandidato);
    //botonFotoCandidato = document.getElementById("fotoCandidato");
    //botonFotoCandidato.addEventListener("", agregarFoto);
};

function getCandidatosNoRegistrados(){
    $.ajax({
        url: "../logica/CerebroCandidato.php",
        type: "GET",
        data: { option: "candidatosNoAceptados",datos:"null" }
    }).done(function(respu){
        console.log("respuesta : " + respu);
        info = document.getElementById("info");                  
        json = JSON.parse(respu);
        console.log("nombre:"+ json[0]["nombre"]);
        /*
         * insertando los candidatos en el documente html
         */
        var infoSeccion = document.getElementById("infoSeccion");

        for(var i = 0; i < json.length; i++){
            var div = document.createElement("DIV");
            div.setAttribute("id","candidatoNo_"+(i + 1));
            for (var j = 0; j < max; j++) {
                var table = document.createElement("DIV");
                var table = document.getElementById("myTable");
                var header = table.createTHead();
                var row = header.insertRow(0);
                var cell = row.insertCell(0);
                cell.innerHTML = "<b>This is a table header</b>";
            }
        }
       info.innerHTML= json;                  
    });
}

function setCandidato() {
    
    var foto = document.getElementById("fotoCandidato").value;
    var nombre = document.getElementById("Nombre").value;
    var appellidoPat = document.getElementById("ApePat").value;
    var appellidoMat = document.getElementById("ApeMat").value;
    var email = document.getElementById("Email").value;
    var celular = document.getElementById("Celular").value;
    var matricula = document.getElementById("Matricula").value;
    var carrera = document.getElementById("Carrera").value;
    var creditos = document.getElementById("Creditos").value;
    var temaTesis = document.getElementById("TemaTesis").value;
    var directorTesis = document.getElementById("DirectorTesis").value;
    var lugarTrabajo = document.getElementById("LugarTrabajo").value;
    var horarioTrabajo1 = document.getElementById("HoraroTrabajo1").value;
    var horarioTrabajo2 = document.getElementById("HoraroTrabajo1").value;
    var cartaCompromiso = document.getElementById("CartaCompromiso").value;
    var cartaExpoMotivos = document.getElementById("CartaExpoMotivos").value;
    var contrasena = document.getElementById("Contrasena").value;
    
    var formData = new FormData(document.getElementById("enviarimagenes"));
    console.log(formData);
    /*var datos = {
        "nombre" : nombre,
        "email" : email,
        "contrasena" : contrasena
    };*/
    //console.log("entre");
    $.ajax({
        url: "../logica/CerebroCandidatoMarco.php",
        type: "POST",
        data: { option: "registrarCandidato",
                formData,
                foto: foto,
                nombre: nombre,
                apellidoPaterno: appellidoPat,
                apellidoMaterno: appellidoMat,
                email: email,
                celular: celular,
                matricula: matricula,
                carrera: carrera,
                creditos: creditos,
                temaDeTesis: temaTesis,
                directorDeTesis: directorTesis,
                lugarDeTrabajo: lugarTrabajo,
                horarioDeTrabajo1: horarioTrabajo1,
                horarioDeTrabajo2: horarioTrabajo2,
                cartaCompromiso: cartaCompromiso,
                cartaExposicionDeMotivos: cartaExpoMotivos,
                contrasena: contrasena
              }
    })
    .done(function(respu){
        //console.log("regreso resp");
        console.log("respuesta : " + respu);
        //info = document.getElementById("info");  
        //var json = JSON.parse(respu);
        //console.log(json);
        //console.log("nombre:"+ json[0]["nombre"]);
        
        //info.innerHTML= json;
    });
}

/*function agregarFoto() {
    var imagen = document.getElementById("mostrarImagen");
    var url = document.getElementById("fotoCandidato").value.toString();
    imagen.src = "C:\Users\marco\Desktop\índice.png";
}*/