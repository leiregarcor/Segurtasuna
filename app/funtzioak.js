$(document).on("click", "#btnModal", function(){
    var IdEzabatu =$(this).data('id');
    $("#id").val(IdEzabatu);
    //id-a bidaltzeko modalera:
    //ezin da zuzenean php sesioko bariable batean gorde, beraz ajax erabiliz php orrira bidaliko dugu bariablea

}
);

function nan(dni) {
    var zenbaki
    var letr
    var letra
    var expresio_erregularra
    var ema=false;
   
    expresio_erregularra = /^\d{8}[a-zA-Z]$/;
   
    if(expresio_erregularra.test (dni) == true){
        zenbaki = dni.substr(0,dni.length-1);
       letr = dni.substr(dni.length-1,1);
       zenbaki = zenbaki % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(zenbaki,zenbaki+1);
      if (letra!=letr.toUpperCase()) {
         window.alert ('NAN-a gaizki dago');
       }else{
           ema=true;
       }
    }else{
       window.alert ('NAN-a gaizki dago, formatuak ez du balio');
    }
    return ema;
}

function email(mail) {
    var ema=false;
    if (/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(mail)){
        ema=true;
    } else {
        alert ("Email-a gaizki jarri duzu.");
    }
    return ema;
}
function konprobaketa() {

    var dni = document.getElementById("NAN").value;
    var mail = document.getElementById("mail").value;
    if(nan(dni) && email(mail)){
        document.erregistroForm.submit();
    }
}
