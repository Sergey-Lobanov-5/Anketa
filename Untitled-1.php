
<!DOCTYPE html>
<html>
<head>
<title>Анкета Web-Разработчика</title>
<meta charset="utf-8" />
<style>
#colonka1{
    background-color:green;
}
#colonka2{
    background-color:#887359;
}
input[type="text"]{
        margin-bottom: 2px;
    }
    </style>
</head>
<body>
<h2>Анкета</h2>
<form action="" method="POST">
<table border="1" style="border-collapse:collapse;" cellspacing='0' cellpadding='4'>
    <tr>
<td id="colonka1"><label>Регистрационное имя </label> </td>
<td  width="65%" id="colonka2"><input type="text" name="name"></td>
 </tr> 

 <tr>
<td id="colonka1"><label>Пароль </label> </td>
<td width="65%" id="colonka2"><input type="text" name="parol1"> Введите пароль <br><br>
<input type="text" name="parol2"> Подтвердтите пароль</td> 
 </tr> 

 <tr>
<td id="colonka1"><label>Ваша специализация </label> </td>
<td width="65%" id="colonka2"><select name="job"><option value="Web-master">Web-master</option>
<option value="Baw-master">Baw-master</option>
<option value="Pow-master">Pow-master</option>
</select></td>
</tr>

<tr>
<td id="colonka1"><label>Пол </label> </td>
<td id="colonka2"> <input type="radio" name="pol" value="М">М   <input type="radio" name="pol" value="Ж">Ж</td>
 </tr> 

 <tr>
<td id="colonka1"><label>Ваши навыки </label> </td>
<td id="colonka2"><input type="checkbox" name="technologies[]" value="HTML" >Знание HTML и CSS<br>
<input type="checkbox" name="technologies[]" value="Perl" >Знание Perl <br>
<input type="checkbox" name="technologies[]" value="ASP" >Знание ASP <br>
<input type="checkbox" name="technologies[]" value="Adobe" >Знание Adobe Photoshop <br>
<input type="checkbox" name="technologies[]" value="JAVA" >Знание JAVA <br>
<input type="checkbox" name="technologies[]" value="JS" >Знание JavaScript <br>
<input type="checkbox" name="technologies[]" value="Flash" >Знание Flash<br>
</td>
 </tr> 

 <tr>
<td id="colonka1"><label>Дополнительные сведения о себе </label> </td>
<td width="65%" id="colonka2"><textarea  cols="45" name="textarea"></textarea></td>
 </tr>  
</table>
 <input type="submit" value="Отправить">
 <input type="reset" value="Очистить форму">
</form>

<?php
if(isset($_POST["name"]) && isset($_POST["parol2"]) && 
isset($_POST["job"]) && isset($_POST["pol"])&& isset($_POST["textarea"])) {
    $name = htmlentities($_POST["name"]);
    $parol = htmlentities($_POST["parol2"]);
    if(isset($_POST["job"])){
        $job=$_POST["job"];
    }
    if(isset($_POST["pol"])){
        $pol=$_POST["pol"];
    }
    if(isset($_POST["technologies"])){
        $skl=$_POST["technologies"];
    }
    if(isset($_POST["textarea"])){
        $area=htmlentities($_POST["textarea"]); 
    }

    $output ="
    <html>
    <head>
    <title>Анкетные данные</title>
    </head>
    <body>
    Вас зовут: $name<br />
    Ваш пароль: $parol<br />
    Ваша специлизация: $job<br />
    Пол: $pol<br />
    Ваши навыки:
    <ul>";
    foreach($skl as $skils)
        $output.="<li>" . htmlentities($skils) . "</li>";
    $output.="</ul></body></html>";
    echo $output;
    if($area!=" "){
        echo " Дополнительные сведения: $area";
    }
    
}
?>
</html>