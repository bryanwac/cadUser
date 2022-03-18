
/*   VERIFICANDO CPF */

var elementCpf = document.getElementById("cpf");

function validaCPFAux(cpf) {	
	var cpf = document.getElementById("cpf").value;
    cpf = cpf.replace(/[^\d]+/g,'');	
	if(cpf == '') return false;	
	// Elimina CPFs invalidos conhecidos	
	if (cpf.length != 11 || 
		cpf == "00000000000" || 
		cpf == "11111111111" || 
		cpf == "22222222222" || 
		cpf == "33333333333" || 
		cpf == "44444444444" || 
		cpf == "55555555555" || 
		cpf == "66666666666" || 
		cpf == "77777777777" || 
		cpf == "88888888888" || 
		cpf == "99999999999")
			return false;		
	// Valida 1o digito	
	add = 0;	
	for (i=0; i < 9; i ++)		
		add += parseInt(cpf.charAt(i)) * (10 - i);	
		rev = 11 - (add % 11);	
		if (rev == 10 || rev == 11)		
			rev = 0;	
		if (rev != parseInt(cpf.charAt(9)))		
			return false;		
	// Valida 2o digito	
	add = 0;	
	for (i = 0; i < 10; i ++)		
		add += parseInt(cpf.charAt(i)) * (11 - i);	
	rev = 11 - (add % 11);	
	if (rev == 10 || rev == 11)	
		rev = 0;	
	if (rev != parseInt(cpf.charAt(10)))
		return false;		
	return true;   
}
function validarCpf(){
    if(!validaCPFAux()){
        elementCpf.setCustomValidity("cpf inválido!");
    }else{
        elementCpf.setCustomValidity("");
    }
}
elementCpf.onchange = validarCpf;


//------------------------------------------------------------------------------------------------------------

/*   VERIFICANDO NOME */

var reg = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/
var nome = document.getElementById("name");

function validarNome(){
    let valido = nome.value.split(/ +/).every(parte => reg.test(parte));
    if(!valido){
        nome.setCustomValidity("nome inválido!");
    }else{
        nome.setCustomValidity("");
    }
}
nome.onchange = validarNome;

//-------------------------------------------------------------------------------------------------------------

/*   VERIFICANDO DATA */

var data = document.getElementById("data");

function validaData(){
    datasrt = data.value;
    arrDatasrt = datasrt.split('/');
    strFormatada = arrDatasrt[0]+'-'+arrDatasrt[1]+'-'+arrDatasrt[2];
    datacli = new Date(strFormatada);
    dataAtual= new Date();
    if(dataAtual<datacli){
        data.setCustomValidity("data inválida!");
    }else{
        data.setCustomValidity("");
    }
}
data.onchange = validaData;