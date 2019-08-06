<?php $arr  = array('AS' => array('Name' => 'Ashanti',
								  'districts' => array('Adansi North','Adansi South','Afigya-Kwabre','Ahafo Ano North','Ahafo Ano South','Amansie Central','Amansie West','Asante Akim Central','Asante Akim North','Asante Akim South','Asokore Mampong','Atwima Kwanwoma','Atwima Mponua','Atwima Nwabiagya','Bekwai','Bosome Freho','Botsomtwe','Ejisu-Juaben','Ejura - Sekyedumase','Kumasi','Kwabre East','Mampong','Obuasi','Offinso North','Offinso South','Sekyere Afram Plains','Sekyere Central','Sekyere East','Sekyere Kumawu','Sekyere South')), 
					'BA' => array('Name' => 'Brong-Ahafo',
								  'districts' => array('Asunafo North','Asunafo South','Asutifi North','Asutifi South','Atebubu-Amantin','Banda','Berekum East','Berekum','Dormaa East','Dormaa','Dormaa West','Jaman North','Jaman South','Kintampo North','Kintampo South','Nkoranza North','Nkoranza South','Pru','Sene East','Sene West','Sunyani','Sunyani West','Tain','Tano North','Tano South','Techiman','Techiman North','Wenchi')),
					'CE' => array('Name' => 'Central',
								  'districts' => array('Abura/Asebu/Kwamankese','Agona East','Agona West Municipal','Ajumako/Enyan/Essiam','Asikuma/Odoben/Brakwa','Assin North Municipal','Assin South','Awutu Senya East Municipal','Awutu Senya West','Cape Coast Metropolitan','Effutu Municipal','Ekumfi','Gomoa East','Gomoa West','Komenda/Edina/Eguafo/Abirem Municipal','Mfantsiman Municipal','Twifo-Ati Morkwa','Twifo/Heman/Lower Denkyira','Upper Denkyira East Municipal','Upper Denkyira West')),
					'EA' => array('Name' => 'Eastern',
								  'districts' => array('Akuapim South','Akuapim North','Akyemansa','Asuogyaman','Ayensuano','Atiwa East','Atiwa West','Birim Central Municipal','Birim North','Birim South','Denkyembour','East Akim Municipal','Fanteakwa','Kwaebibirem','Kwahu Afram Plains North','Kwahu Afram Plains South','Kwahu East','Kwahu South','Kwahu West Municipal','Lower Manya Krobo','New-Juaben Municipal','Nsawam Adoagyire Municipal','Suhum','Upper Manya Krobo','Upper West Akim','West Akim Municipal','Yilo Krobo')),
					'GA' => array('Name' => 'Greater Accra',
								  'districts' => array('Ablekuma North Municipal','Ablekuma West Municipal','Accra Metropolitan','Ada East','Ada West','Adenta Municipal','Ashaiman Municipal','Ayawaso East Municipal','Ayawaso North Municipal','Ayawaso West Municipal','Ga Central','Ga East Municipal','Ga North Municipal','Ga South Municipal','Ga West Municipal','Kpone Katamanso Municipal','Krowor Municipal','La Dade Kotopon Municipal','La Nkwantanang Madina Municipal','Ledzokuku Municipal','Ningo Prampram','Okaikwei Municipal','Shai Osudoku','Tema Metropolitan','Tema West Municipal','Weija Municipal')),
					'NO' => array('Name' => 'Northern',
								  'districts' => array('Bole','Bunkpurugu-Nyankpanduri','Central Gonja','Chereponi','East Gonja Municipal','East Mamprusi Municipal','Gushegu Municipal','Karaga','Kpandai','Kumbungu','Mamprugo Moaduri','Mion','Nanton','Nanumba North Municipal','Nanumba South','North Gonja','Saboba','Sagnarigu Municipal','Savelugu Municipal','Sawla-Tuna-Kalba','Tamale Metropolitan','Tatale Sangule','Tolon','West Gonja','West Mamprusi Municipal','Yendi Municipal','Yunyoo-Nasuan','Zabzugu')),
					'UE' => array('Name' => 'Upper East',
								  'districts' => array('Bawku Municipal','Bawku West','Binduri','Bolgatanga Municipal','Bongo','Builsa','Builsa South','Garu-Tempane','Kassena Nankana East','Kassena Nankana West','Nabdam','Pusiga','Talensi')),
					'UW' => array('Name' => 'Upper West',
								  'districts' => array('Daffiama Bussie Issa','Jirapa','Lambussie Karni','Lawra','Nadowli','Nandom','Sissala East','Sissala West','Wa East','Wa Municipal','Wa West')),
					'VO' => array('Name' => 'Volta',
								  'districts' => array('Adaklu','Afadjato South','Agotime Ziope','Akatsi North','Akatsi South','Biakoye','Central Tongu','Ho Municipal','Ho West','Hohoe Municipal','Jasikan','Kadjebi','Keta Municipal','Ketu North','Ketu South Municipal','Kpando Municipal','Krachi East','Krachi Nchumuru','Krachi West','Nkwanta North','Nkwanta South','North Dayi','North Tongu','South Dayi','South Tongu')),
					'WE' => array('Name' => 'Western',
								  'districts' => array('Ahanta West','Aowin/Suaman','Bia West','Bia East','Bibiani/Anhwiaso/Bekwai','Bodi','Ellembele','Jomoro','Juaboso','Mpohor','Mpohor/Wassa East','Nzema East Municipal','Prestea-Huni Valley','Sefwi Akontombra','Sefwi Wiawso Municipal','Sekondi Takoradi Metropolitan','Shama','Suaman','Tarkwa-Nsuaem Municipal','Wasa Amenfi East','Wasa Amenfi West','Wassa Amenfi Central')),
					'status' => 'Success');
//echo json_encode($arr) 
	//	require 'gen/connector.gen.php';
		//require 'gen/autoreloader.gen.php';
		//require 'gen/settings.gen.php';
	//	require 'cls/lib.cls.php';
	///	require 'gen/action.gen.php';
	//	require 'gen/controller.gen.php';
		//if($pg!='action'){include $temp;} 
	//	include './inc/step1.inc.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript">
    $('button#push').click(function(){
        $.post('https://wwwefiewura.000webhostapp.com/?pg=host')
    });
</script>
</body>
</html>