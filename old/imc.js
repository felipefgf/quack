function calculadora(){
	var altura, peso, imc, classificacao;
	altura = 1 * $("#altura").val();
    peso = 1 * $("#peso").val();
    imc = peso / (altura^2); //faz o calculo do IMC
    imc = parseFloat(imc).toFixed(2); //Faz o IMC ter apenas 2 casas decimais
    //("texto" + variavel) concatenar frase com algo (pode ser frase com frase)
    if(imc < 18.5){
    	classificacao = "abaixo do peso";
    }else if(imc < 24.9){
    	classificacao = "peso ideal";
    }else if(imc < 29.9){
    	classificacao = "acima do peso";
    }else if(imc < 34.9){
    	classificacao = "obesidade grau I";
    }else if(imc < 24.9){
    	classificacao = "obesidade grau II";
    }else{
    	classificacao = "obesidade grau III";
    }
    
    $("#altura").val("");
    $("#peso").val("");
    
    $("#textoApresentacao").html("IMC: "+imc+" Classificação é: "+classificacao);

    return imc;
}