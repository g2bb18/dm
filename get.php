<?

$data=file_get_contents("https://domains-monitor.com/api/v1/TOKEN/get/ZONE/list/FORMAT/");

$data=explode('table class="timetable_content"',$data);
$data=explode('id="other_dates_caller"',$data[1]);

$file = fopen ("original.html","w+");
			fputs($file, $data[0]);		
		fclose ($file);	
	
if(md5($data[0])!='3fafab333653f22e0900e75876251f8e4f')
	{
		mail('TEST@MAIL.COM','NOTIF','');
		$file = fopen ("change.html","w+");
			fputs($file, $data[0]);		
		fclose ($file);	
		echo "found changes";
	}
		

?>
