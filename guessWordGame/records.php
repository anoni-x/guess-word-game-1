<?php
$a=htmlspecialchars($_POST['answer_1']);
$b=htmlspecialchars($_POST['answer_2']);
$c=htmlspecialchars($_POST['answer_3']);
$d=htmlspecialchars($_POST['answer_4']);
$e=htmlspecialchars($_POST['answer_5']);
$f=htmlspecialchars($_POST['answer_6']);
$g=htmlspecialchars($_POST['answer_7']);
$h=htmlspecialchars($_POST['answer_8']);
$i=htmlspecialchars($_POST['answer_9']);
$j=htmlspecialchars($_POST['answer_10']);
if (filesize('records.dat')>0)
	$first=FALSE;
else
	$first=TRUE;
$f=fopen('records.dat','at') or die('Не получается записать ход решения!');
flock($f,2);
if ($first==TRUE)
	fputs($f,"!Запись ответов!\n---\n");
else
	fputs($f,"\n---\n");
	fputs($f,$_SERVER['REMOTE_ADDR'].'|');
	fputs($f,date('d-m-Y')."\n");
	fputs($f,$a."\n");
	fputs($f,$b."\n");
	fputs($f,$c."\n");
	fputs($f,$d."\n");
	fputs($f,$e."\n");
	fputs($f,$f."\n");
	fputs($f,$g."\n");
	fputs($f,$h."\n");
	fputs($f,$i."\n");
	fputs($f,$j."\n");
	flock($f,3);
	fclose($f);
?>