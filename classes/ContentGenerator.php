<?php

namespace app\classes;
use app\models\Ps;
use app\models\Test;
use app\models\Question;

use Yii;

class ContentGenerator
{
    /**
     * Generation of objects in the menu section
     * @return mixed
     */
    public static function getMenu()
    {
        $menu['ps'] = Ps::find()->asArray()->all();     
        $menu['test'] = Test::find()->asArray()->all();     
        
        debug($menu);
    }
	
 	public static function getSelectQuestion($testId = 1)
	{
		$questions = Question::find()->where([
			'use' => false,
			'test_id' => $testId
		])->asArray()->all();
		foreach($questions as $question){
			$ids[] = $question['id'];
		}
		debug($ids);
		$id=shuffle($ids);
		debug($id);
		
	}
	
}