<?php 
require_once './funcs.php';
$mode=$_GET['v']??'';
if(''===$mode){
	$res_data=[
	"result"=>false,
	"message"=>"存在しないモードが指定されました",
	"r_code"=>1
	];
	header("Content-Type: application/json; charset=utf-8");
	echo json_encode($res_data);
	exit;
}
if ('balance' === $mode) {
	$r=@file_get_contents('https://open.bitzeny.link/api/v1/balance?api_key='.$api_key.'&user='.$hub_userid);
	if($r!==''&&$r!==false){
		$r=json_decode($r,true);
		if($r['result']==='ng'){
			$res_data=[
			"result"=>false,
			"balance"=>0,
			"r_code"=>1
			];
			header("Content-Type: application/json; charset=utf-8");
			echo json_encode($res_data);
			exit;
		}
		$res_data=[
		"result"=>true,
		"balance"=>$r['balance'],
		"r_code"=>0
		];
		header("Content-Type: application/json; charset=utf-8");
		echo json_encode($res_data);
		exit;
	}
}else if('messages' === $mode){
	$res_data=[
	"result"=>true,
	"reward"=>$zeny_static_reward?$zeny_static_reward:$rewards_view,
	"reward_interval"=>$reward_interval,
	"r_code"=>0
	];
	header("Content-Type: application/json; charset=utf-8");
	echo json_encode($res_data);
	exit;
}else if('account' === $mode){
	//次までの時刻のあれ
}

?>