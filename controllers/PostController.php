<?php
namespace controllers;

use models\Mysql;
use controllers\BaseController;



class PostController extends BaseController
{
	public function actionList() 
	{
		$data = $this->mysql->select("SELECT * FROM article");
		echo $this->render('views',[
			'data' =>$data
			]);
	}
	public function actionShow($id)
	{
		$data = $this->mysql->select("SELECT * FROM article WHERE `id`=$id");
		$data = $data[0];
		echo $this->render('show', [
			'data' =>$data
			]);
	}
}

?>