<?php 
	class Model
	{

		public function showNews($newsCount, $flag=null) 
		{
			if($flag=='NEWEST'){
				//$sql="SELECT TOP $newsCount * FROM `news` ORDER BY `newsDate` DESC";
				$sql="SELECT `id`, `newsTitle`, `newsImageS`, `newsImageL`, `newsText`, `newsDate` FROM `news` ORDER BY `newsDate` DESC LIMIT $newsCount";
			}
			else{
				$sql='SELECT id, newsTitle, newsImageS, newsImageL, newsText, newsDate FROM news ORDER BY newsDate DESC';
			}

			$dbh = pdoConn::getDbh();
       		$stmt=$dbh->prepare($sql);
        	$stmt->execute();

			$news=array();

			while ($row = $stmt->fetch()) {
				$news[] = $row;
			}		
			return $news;
		}

		public function showGame() 
		{
			
			$sql='SELECT id, title FROM Post';
			$dbh = pdoConn::getDbh();
       		$stmt=$dbh->prepare($sql);
        	$stmt->execute();

        	$games=array();

			while ($row = $stmt->fetch()) {
				$games[] = $row;
			}		
			return $games;
		}

	}
?>