<?php
/**
 * Created by PhpStorm.
 * User: LPK
 * Date: 2018/4/20
 * Time: 15:52
 */

namespace app\controllers;
use yii\db\Query;
use yii\web\Controller;
use \Yii;

class HelloController extends Controller
{

    public function actionIndex() {
        $query = new Query();
        $query->orderBy(['id'=>SORT_ASC]);
    }

}