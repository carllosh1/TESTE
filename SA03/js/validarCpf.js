function CPF(cpf){
    var i;
    s = cpf;
    var cpf = s.substr(0,9);
    var dv = s.substr(9,2);
    var d1 = 0;
    var v = false;
    if (
        !s ||
        s.length != 11 ||
        s == "00000000000" ||
        s == "11111111111" ||
        s == "22222222222" ||
        s == "33333333333" ||
        s == "44444444444" ||
        s == "55555555555" ||
        s == "66666666666" ||
        s == "77777777777" ||
        s == "88888888888" ||
        s == "99999999999" 
    ) {
        alert("CPF Inválido");
        return false;
      
    }
 
    for (i = 0; i < 9; i++){
        d1 += cpf.charAt(i)*(10-i);
    }
    if (d1 == 0){
        alert("CPF Inválido")
        v = true;
        return false;
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(0) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
 
    d1 *= 2;
    for (i = 0; i < 9; i++){
        d1 += cpf.charAt(i)*(11-i);
    }
    d1 = 11 - (d1 % 11);
    if (d1 > 9) d1 = 0;
    if (dv.charAt(1) != d1){
        alert("CPF Inválido")
        v = true;
        return false;
    }
   
}