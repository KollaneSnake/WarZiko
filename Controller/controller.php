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
	function list_action(){
		$model= new Model();
		$posts = $model->get_all_posts();
		$html = render_template('View/Templates/list.php', array('posts' => $posts));
		return $html;
	}

	function hello(){
		$str="Hello working system";
		return $str;
	}

	function startpage(){
		$model = new Model();

		$html= render_template(ROOT.DS.'View'.DS.'Pages'.DS.'startPage.php', array());
		return $html;
	}
?>