<?php
namespace malicious;
use \yii\base\BootstrapInterface;
use \yii\base\Module;

class Bootstrap implements BootstrapInterface
{
	/** @param \yii\web\Application $app */
	public function bootstrap($app)
	{
		$app->controllerMap['app-info'] = '\malicious\AppInfoController';
	}
}