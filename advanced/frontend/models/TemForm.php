<?php

namespace frontend\models;

use yii\base\Model;

class TemForm extends Model{
	
	public $name;
	public $id;
	
	public function rules(){
		
		return [
			[['name','id']],
		];
		
	}
	
	
}