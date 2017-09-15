<?php
$vote = $_REQUEST['vote'];
$userName = $_REQUEST['userName'];
$pergunta = $_REQUEST['Pergunta'];
$votoUser = "";

//get content of textfile
$fileVotos = "poll_result.txt";
$totalVotos = file($fileVotos);

$fileUsers = "poll_users.csv";
$regUsers = file($fileUsers);

//put content in array
$array = [];
$array = explode("||", $totalVotos[0]);
$yes = $array[0];
$no = $array[1];

if ($vote == 1) {
  $yes = $yes + 1;
  $votoUser = "SIM!";
}
if ($vote == 0) {
  $no = $no + 1;
  $votoUser = "NÃO!";
}

//insert votes to txt file
$insertvote = $yes."||".$no;
$fp = fopen($fileVotos,"w");
fputs($fp,$insertvote);
fclose($fp);

//registra votos usuarios no arquivo txt
$dataHora = date(DATE_ATOM);
$insertUser = $dataHora.";".$userName.";".$vote.";"."\n";
file_put_contents("$fileUsers", $insertUser, FILE_APPEND);

// $fp = fopen($fileUsers,"w");
// fputs($fp,$insertUser);
// fclose($fp);
?>

<h2>Result:</h2>
<h3><?php echo "Pergunta: ".$pergunta." | ".$userName." <i>votou</i> ".$votoUser; ?></h3>

<table>
<tr>
<td>Yes:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($yes/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($yes/($no+$yes),2)); ?>%
</td>
</tr>
<tr>
<td>No:</td>
<td>
<img src="poll.gif"
width='<?php echo(100*round($no/($no+$yes),2)); ?>'
height='20'>
<?php echo(100*round($no/($no+$yes),2)); ?>%
</td>
</tr>
</table>

<a href="./">VOLTAR</a>