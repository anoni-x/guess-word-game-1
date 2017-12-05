<table bgcolor="black" cellpadding="1" align="center">
<form method="post">
<tr><td bgcolor="white">
Всі його люблять, всі його чекають, а хто на нього подивиться — кожен скривиться<td bgcolor="white">
<input name="answer_1" type="text">
<br>
<tr><td bgcolor="white">
Один баранець пасе тисячі овець.<td bgcolor="white">
<input name="answer_2" type="text">
<br>
<tr><td bgcolor="white">
Золоте сховалося, а срібне показалося<td bgcolor="white">
<input name="answer_3" type="text">
<br>
<tr><td bgcolor="white">
Чорна корова весь світ поборола. <td bgcolor="white">
<input name="answer_4" type="text">
<br>
<tr><td bgcolor="white">
По соломі ходить, а не шелестить.<td bgcolor="white">
<input name="answer_5" type="text">
<br>
<tr><td bgcolor="white">
Що росте догори коренем?<td bgcolor="white">
<input name="answer_6" type="text">
<br>
<tr><td bgcolor="white">
Живе — лежить, помре — побіжить. <td bgcolor="white">
<input name="answer_7" type="text">
<br>
<tr><td bgcolor="white">
І в огні не горить і в воді не тоне.<td bgcolor="white">
<input name="answer_8" type="text">
<br>
<tr><td bgcolor="white">
Старий дід мости помостив, молода прийшла — мости рознесла.<td bgcolor="white">
<input name="answer_9" type="text">
<br>
<tr><td bgcolor="white">
Вдень вікно розбивається, а вночі само вставляється. <td bgcolor="white">
<input name="answer_10" type="text">
<br>
<tr><td bgcolor="white" align="center">
<input type="submit" value="Відповісти" name="enter" style="background:#ffffff; width:200px" title="Відповідь">
<td bgcolor="white" align="center">
<?php
include('records.php');
include('array.php');
//¹1
if ($_POST['answer_1']==$ans["ans1"])
	{
		$a = 3;
	}

else
	{
		$a = 0;
	}
//¹2
if ($_POST['answer_2']==$ans["ans2"])
	{
		$b = 1;
	}

else
	{
		$b = 0;
	}
//¹ 3
if ($_POST['answer_3']==$ans["ans3"])
	{
		$c = 1;
	}

else
	{
		$c = 0;
	}
//¹ 4
if ($_POST['answer_4']==$ans["ans4"])
	{
		$d = 1;
	}

else
	{
		$d = 0;
	}
//¹5
if ($_POST['answer_5']==$ans["ans5"])
	{
		$e = 1;
	}

else
	{
		$e = 0;
	}
//¹6
if ($_POST['answer_6']==$ans["ans6"])
	{
		$f = 1;
	}

else
	{
		$f = 0;
	}
//¹7
if ($_POST['answer_7']==$ans["ans7"])
	{
		$g = 1;
	}

else
	{
		$g = 0;
	}
//¹8
if ($_POST['answer_8']==$ans["ans8"])
	{
		$h = 1;
	}

else
	{
		$h = 0;
	}
//¹9
if ($_POST['answer_9']==$ans["ans9"])
	{
		$i = 1;
	}

else
	{
		$i = 0;
	}
//¹10
if ($_POST['answer_10']==$ans["ans10"])
	{
		$j = 1;
	}

else
	{
		$j = 0;
	}


$all = ($a+$b+$c+$d+$e+$f+$g+$h+$i+$j);
echo 'Ваша оцінка: <font color=red>'.round($all).'</font>';
echo '</form>';
echo '</table>';
?>