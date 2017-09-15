<html>
<head>
	<link rel="stylesheet" media="all" href="stylesheet.css" />
	<script type="text/javascript" src="jquery-3.2.1.slim.min.js"></script>
	<script type="text/javascript" src="funcoes.js"></script>
</head>
<body>

<div class="alert">
	<div id="mostraPergunta"></div>
	<div id="mostraNome"></div> 	

	<div id="poll">

		<h1 style="color:white;">Aula online</h1>
		<form>
		PERGUNTA NÚMERO: 
		 <input list="pergunta" name="pergunta" oninput="getPergunta(this.value)">
		  <datalist id="pergunta">
		    <option value="1">
		    <option value="2">
		    <option value="3">
		    <option value="4">
		    <option value="5">
		    <option value="6">
		    <option value="7">
		    <option value="8">
		    <option value="9">
		  </datalist><BR />
		  NOME: <input type="text" name="nome" oninput="getName(this.value)"><br>

		<div style="color:blue;font-size: 200%">SIM
		<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
		<img src="thumbs-up-xl.png"/></div>

		<p></p>

		<div style="color:red;font-size: 200%">NÃO 
		<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
		<img src="thumbs-down-xl.png"/></div>
		</form>
	</div>

</div>

</body>
</html>