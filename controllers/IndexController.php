<?php

/**
 * Class IndexController
 */
class IndexController extends Controller
{
    public function actionIndex()
    {
        foreach ($_POST as $raw) {
            /** @var $figure Figure */
            $figure = new $raw['type'] ($raw['params']);
            $figure->draw();
        }
    }
}