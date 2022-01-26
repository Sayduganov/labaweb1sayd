<? session_start(); include("check_log.php");
require_once('tcpdf/tcpdf.php');
function fetch_data()
{
 $conn=mysqli_connect("eu-cdbr-west-02.cleardb.net", "b44960774da738", "33830cff") or die ("Невозможно
подключиться к серверу"); // установление соединения с сервером
 mysqli_query($conn,'SET NAMES cp1251'); // тип кодировки
 // подключение к базе данных:
 mysqli_select_db($conn,"heroku_e3e718f150827c6") or die ("Нет такой таблицы!");
$output .= '';
$result = mysqli_query($conn, "SELECT property.address as 'address', property.cost as 'cost', housemates.fullname as 'fullname', debtors.debt as 'debt' FROM property LEFT JOIN housemates ON (housemates.id_house=property.id) LEFT JOIN debtors ON (debtors.id_mate=housemates.id_mate)");
$i=1;
while($row = mysqli_fetch_array($result)) {
$arr=explode(' ', iconv("cp1251", "utf-8", $row['fullname']));
$str=$arr[0];
$str2=" ";
foreach ($arr as $z) {
 $z=substr($z,0,2);
 $str2.=$z.' ';
}
$str.=' '.substr($str2, 3);
$output .= '<tr>
<td>'.$i.'</td>
<td>'.$str.'</td>
<td>'.iconv("cp1251", "utf-8", $row['debt']).'</td>
<td>'.iconv("cp1251", "utf-8", $row['address']).'</td>
<td>'.((int)iconv("cp1251", "utf-8", $row['debt'])/(int)iconv("cp1251", "utf-8", $row['cost'])).'</td>
</tr>';
$i++;
}
return $output;
}

$obj_pdf = new tcpdf('L', PDF_UNIT, PDF_PAGE_FORMAT, true, 'utf-8', false);
$obj_pdf-> SetTitle("Должники");
$obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('dejavusans');
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
$obj_pdf->setPrintHeader(false);
$obj_pdf->setPrintFooter(false);
$obj_pdf->SetAutoPageBreak(TRUE, 10);
$obj_pdf->setFontSubsetting(true);
$obj_pdf->SetFont('dejavusans', '', 12);
$obj_pdf->AddPage();
$content .= '';
$content .= '

<h3 align="center">Должники</h3><br /><br />

<table border="1" cellspacing="0" cellpadding="5">

<tr>

<th>№</th>

<th>ФИО</th>
<th>Размер долга</th>
<th>Адрес</th>
<th>Доля размера долга от стоимости жилья</th>
</tr>

';

$content .= fetch_data();

$content .= '</table>';

$obj_pdf->writeHTML($content, true, false, false, false, '');

$obj_pdf->Output('inf.pdf', 'I');

?>