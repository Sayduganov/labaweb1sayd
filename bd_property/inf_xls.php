<? session_start(); include("check_log.php");  function xlsBOF() {    echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);     return;}function xlsEOF() {    echo pack("ss", 0x0A, 0x00);    return;}function xlsWriteNumber($Row, $Col, $Value) {    echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);    echo pack("d", $Value);    return;}function xlsWriteLabel($Row, $Col, $Value ) {    $L = strlen($Value);    echo iconv("cp1251", "utf-8", pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L));    echo $Value;    return;}header("Content-Type: application/force-download");header("Content-Type: application/octet-stream");header("Content-Type: application/download");header( "Content-type: application/vnd.ms-excel; charset=UTF-8" );header("Content-Disposition: attachment;filename=list.xls");header("Pragma: no-cache");header("Expires: 0");xlsBOF();xlsWriteLabel(0,0,iconv("utf-8","cp1251", "Номер")); xlsWriteLabel(0,1,iconv("utf-8","cp1251", "ФИО"));xlsWriteLabel(0,2,iconv("utf-8","cp1251", "Размер долга")); xlsWriteLabel(0,3,iconv("utf-8","cp1251", "Адрес")); xlsWriteLabel(0,4,iconv("utf-8","cp1251", "Доля размера долга от стоимости жилья"));   $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможноподключиться к серверу"); // установление соединения с сервером mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки // подключение к базе данных: mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!"); $result = mysqli_query($conn, "SELECT property.address as 'address', property.cost as 'cost', housemates.fullname as 'fullname', debtors.debt as 'debt' FROM property LEFT JOIN housemates ON (housemates.id_house=property.id) LEFT JOIN debtors ON (debtors.id_mate=housemates.id_mate)");$i=1;    while($row=mysqli_fetch_array($result)){ $arr=explode(' ', $row['fullname']);$str=$arr[0];$str2=" ";foreach ($arr as $z) { $z=substr($z,0,1); $str2.=$z.' ';}$str.=' '.substr($str2, 3);xlsWriteLabel($i,0,$i);xlsWriteLabel($i,1,$str); xlsWriteLabel($i,2,$row['debt']);xlsWriteLabel($i,3,$row['address']); xlsWriteLabel($i,4,(int)$row['debt']/(int)$row['cost']);  $i++;     }xlsEOF();exit;