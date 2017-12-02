window.onload = function() {
    //submit = document.getElementById("boton");
    //submit.addEventListener("click",getCandidatosNoRegistrados);
    submitRegistrarse = document.getElementById("btnRegistrarse");
    submitRegistrarse.addEventListener("click",setCandidato);
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
    nombre = document.getElementById("inpNombre");
    email = document.getElementById("inpEmail");
    contrasena = document.getElementById("inpContrasena");
    /*var datos = {
        "nombre" : nombre,
        "email" : email,
        "contrasena" : contrasena
    };*/
    console.log("entre");
    $.ajax({
        url: "../logica/CerebroCandidato.php",
        type: "POST",
        data: { option: "registrarCandidato",
                nombre: nombre,
                email: email,
                contrasena: contrasena
              }
    })
    .done(function(respu){
        console.log("regreso resp");
        console.log("respuesta : " + respu);
        //info = document.getElementById("info");  
        //var json = JSON.parse(respu);
        //console.log(json);
        //console.log("nombre:"+ json[0]["nombre"]);
        
        //info.innerHTML= json;
    });
}

