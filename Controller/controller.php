<?php
// ------------------------------------------------
	function render_template($path, array $args){
		extract($args);
		ob_start();
		require $path;
		$html = ob_get_clean();
		return $html;
	}
// ------------------------------------------------
	
	function startPage(){
		$model = new Model();
		$newsCount='2';
		$news=$model->showNews($newsCount,'NEWEST');
		$game=$model->showGame('LAST');

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'startPage.php', array('news'=>$news,'game'=>$game));
		return $html;
	}

	function newsPage(){
		$model = new Model();		
		$news=$model->showNews(null,null);

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'newsPage.php', array('news'=>$news));
		return $html;
	}

	function gamesPage(){
		$model = new Model();
		$game=$model->showGame('ALL');

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'gamesPage.php', array('game'=>$game));
		return $html;
	}

	function contactPage(){
		$model = new Model();

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'contactPage.php', array());
		return $html;
	}

	function aboutPage(){
		$model = new Model();

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'startPage.php', array());
		return $html;
	}
?>