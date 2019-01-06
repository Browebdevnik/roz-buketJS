<?php 
header("Content-Type:text/html;charset=UTF8");
$data = file_get_contents('php://input');
$data = json_decode( $data, true);

$mess = "<strong>Имя: </strong>". $data['name']."<br />";
$mess .= "<b>Телефон: </b>". $data['phone'];
$mess .= "<hr>";
$summa = 0;
$mess .= '<html><head><title>Eshop</title><style>table#for_email {border-collapse: collapse;border-spacing: 0;line-height: 1.3;border-radius:2px;}table#for_email td {padding: 5px;border: 1px solid gray;text-align: center;font-size:14px;}#for_email p {text-align: center;}table#for_email tr:hover{ background-color:#edeff1;}</style></head><body><table id="for_email"><tbody><td><p><strong>Артикул</strong></p></td><td><p><strong>Название товара</strong></p></td><td><p><strong>Стоимость</strong></p></td><td><p><strong>Количество</strong></p></td></tr>';

foreach ($data['cart'] as $key => $value) {
 $mess .= '<tr><td><p>'. $key.'</p></td>';
 $mess .= '<td><p>'.$value['name'].'</td>';
 $mess .= '<td><p>'.$value['cost'].'</td>';
 $mess .= '<td><p>'.$value['count'].'</td></tr>';
 
 $summa += $value['count'] * $value['cost'];
}
$mess .= '</tbody></table></body></html>';
$mess .= "<h2 title='Сумма указана в рублях'>Сумма: ".$summa."</h2>";

$to = $data['email'].','.'nikolaiwebdeveloper@yandex.ru';

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/html; charset='utf-8'\r\n";
mail($to, "Google shop", $mess, $headers) or print "Невозможно отправить сообщение!";