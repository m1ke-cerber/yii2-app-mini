<?php
namespace app\controllers;

use yii\web\Controller;

/**
 * Class SiteController
 *
 * @author Михаил Цербер <m1ke.cerber@gmail.com>
 * @package app\controllers
 */
class SiteController extends Controller {

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex() {
        return $this->render('index');
    }
}
