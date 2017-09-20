var nome = "NOME"; // globl var
var voto = "VOTO"; // globl var
var pergunta = "PERGUNTA"; // globl var


function getName(txt) {
	nome = txt;
	$("#mostraNome").html(nome);
	return nome;
}

function getPergunta(txt) {
  pergunta = txt;
  $("#mostraPergunta").html(pergunta);
  return pergunta;
}

function getVote(voto) {
	//alert(nome);
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+voto+"&userName="+nome+"&Pergunta="+pergunta,true);
  xmlhttp.send();
}

function enviaTudo(voto, nome){
	console.log("NOME",nome)
}

var app = angular.module('Resultado', []);
app.controller('myCtrl', function($scope) {
    $scope.resNome= nome;
    $scope.resNumPrgt= pergunta;
    $scope.resVoto= voto;
});
console.log(app.resNome)