<?

include 'simple_html_dom.php';
$file = 'sqa.xml';
$xml = simplexml_load_file($file);

function print_ar($e) {
	echo '<pre>';print_r($e);echo '</pre>';
}
$array = json_decode(json_encode($xml), true);
print_ar($array);