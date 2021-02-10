<?php
date_default_timezone_set('Europe/Istanbul');
setlocale(LC_ALL,"turkish");
$saat = date("H:i");

$mesaj= date("H");

if($mesaj==00.00-00.59 || $mesaj==01.00-01.59 || $mesaj==02.00-02.59 || $mesaj==03.00-03.59 || $mesaj==04.00-04.59 || $mesaj==05.00-05.59 || $mesaj==06.00-06.59 )
{
    $mesajver="esen";
    function mesaj_yaz()
    {
        echo "Esenlikler";
    }
}elseif($mesaj==07.00-07.59 || $mesaj==08.00-08.59 || $mesaj==09.00-09.59 || $mesaj==10.00-10.59){
    $mesajver="sabah";
    function mesaj_yaz(){
        echo "Günaydınnn :)))";
    }
}elseif($mesaj==11.00-11.59 || $mesaj==12.00-12.59 || $mesaj==13.00-13.59 || $mesaj==14.00-14.59 || $mesaj==15.00-15.59 || $mesaj==16.00-16.59 || $mesaj==17.00-17.59){
    $mesajver="gün";
    function mesaj_yaz(){
        echo "İyi Günler";
    }
}elseif($mesaj==18.00-18.59 || $mesaj==19.00-19.59 || $mesaj==20.00-20.59){
    $mesajver="akşam";
    function mesaj_yaz(){
        echo "İyi Akşamlar";
    }
}elseif($mesaj==21.00-21.59 || $mesaj==22.00-22.59 || $mesaj==23.00-23.59){
    $mesajver="gece";
    function mesaj_yaz(){
        echo "İyi Geceler";
    }
}
else{
    $mesajver="hata";
    function mesaj_yaz(){
        echo "Hata";
    }

}

?>
<html>
<head>
<title>Mesaj</title>

</head>
<body>

<?php mesaj_yaz(); ?>

</body>
</html>
