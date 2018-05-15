<?php
	
	namespace app\controllers;

	use yii\web\Controller;
	use yii\data\Pagination;
	use app\models\Flats;

	/**
	* flats list
	*/
	class FlatsController extends Controller
	{
		public function actionIndex () {

			$query = Flats::find();

			$Pagination = new Pagination([
				'defaultPageSize' => 3,
				'totalCount' => $query->count(),
			]);

			$flats = $query->orderBy('id')
			->offset($Pagination->offset)
			->limit($Pagination->limit)
			->all();

			return $this->render('index', [
				'flats' => $flats,
				'pagination' => $Pagination,
			]);
		}
	}

?>