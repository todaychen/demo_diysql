<?php 
	// 将字符串读到php并转化为数组ok
	$fileR = fopen("data.json","r");
	$jsonStr=fread($fileR,filesize("data.json"));
	$arrStr=$jsonStr;
	$jsonArr=json_decode($arrStr);
	// print_r($jsonArr);
	fclose($fileR);
	// 将字符串读到php并转化为数组ok
	

	// $jsonArr[0]->index自加1操作ok！
	$num=$jsonArr[0]->index+1;
	$jsonArr[0]->index=$num;
	// print_r($jsonArr[0]->index."</br>");
	// $jsonArr[0]->index自加1操作ok！
	

	$str='';
	$commaFlag=0;
	foreach ($jsonArr as $key1 => $value1){
		$str.='[{';
		foreach ($jsonArr[$key1] as $key2 => $value2){
			if($commaFlag>0){
				$commaFlag=1;
				$str.=',"'.$key2.'":"'.$jsonArr[$key1]->$key2.'"';
			}else{
				$str.='"'.$key2.'":"'.$jsonArr[$key1]->$key2.'"';
			}
			$commaFlag++;
		}
		$str.='}]';
	}
	// echo $str;


	// 将字符串写入json成功ok
	$fileW = fopen("data.json","w");
	fwrite($fileW,$str);
	fclose($fileW);
	// 将字符串写入json成功ok
	echo '{"inf":"ok","index":'.$jsonArr[0]->index.'}';
?>