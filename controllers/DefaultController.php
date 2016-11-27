<?php

namespace mdm\admin\controllers;

use Yii;

/**
 * DefaultController
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class DefaultController extends \yii\web\Controller
{
    /**
     * Index action.
     *
     * @param string $page
     *
     * @return string|\yii\web\Response
     */
    public function actionIndex($page = 'README.md')
    {
        if (strpos($page, '.png') !== false) {
            $file = Yii::getAlias("@mdm/admin/{$page}");

            return Yii::$app->getResponse()->sendFile($file);
        }

        return $this->render('index', ['page' => $page]);
    }
}
