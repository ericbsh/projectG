<?php 
//在這裡取得資料的門票
try {
	require_once("g2_dataConnect.php");
	//執行sql指令並取得pdoStatement
	$sql = "select M.memName, M.virChaNo, M.virBgNo, D.postTime
			from MEMBER M join discusArt D on M.memNo =D.memNo
			where articleNo = 1;";
	$myArticles = $pdo->query($sql);
	$prodRow = $myArticles->fetchAll(PDO::FETCH_ASSOC);
	echo json_encode($prodRow,JSON_UNESCAPED_UNICODE);

} catch (Exception $e) {
	echo "錯誤行號 : ", $e->getLine(), "<br>";
	echo "錯誤原因 : ", $e->getMessage(), "<br>";
	//echo "系統暫時不能正常運行，請稍後再試<br>";	
}
?>
