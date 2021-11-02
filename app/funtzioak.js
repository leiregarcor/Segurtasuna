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
   
    expresio_erregularra = /^\d{8}[a-zA-Z]$/;
   
    if(expresio_erregularra.test (dni) == true){
        zenbaki = dni.substr(0,dni.length-1);
       letr = dni.substr(dni.length-1,1);
       zenbaki = zenbaki % 23;
       letra='TRWAGMYFPDXBNJZSQVHLCKET';
       letra=letra.substring(zenbaki,zenbaki+1);
      if (letra!=letr.toUpperCase()) {
         alert('NAN-a gaizki dago');
       }
    }else{
       alert('NAN-a gaizki dago, formatuak ez du balio');
    }
}

function email(mail) {
    if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3,4})+$/.test(mail)){
    } else {
        alert("Email-a gaizki jarri duzu.");
    }
}
function konprobaketa(dni, mail) {
    nan(dni);
    email(mail);
}