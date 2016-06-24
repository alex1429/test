<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserRoleRule;

class RbacController extends Controller {
    public function actionInit() {
        $auth = Yii::$app->authManager;
		$auth->removeAll();
		
		// доступ к админке
        $dashboard = $auth->createPermission('dashboard');
        $dashboard->description = 'Admin panel';
        $auth->add($dashboard);
		
		$rule = new UserRoleRule();
		$auth->add($rule);
		
		//добавляем роли
		$user = $auth->createRole('user');
		$user->description = 'Пользователь';
		$user->ruleName = $rule->name;
		$auth->add($user);
		
		$manager = $auth->createRole('manager');
		$manager->description = 'Менеджер';
		$manager->ruleName = $rule->name;
		$auth->add($manager);
		
		$auth->addChild($manager, $user);
		$auth->addChild($manager, $dashboard);
		
		$admin = $auth->createRole('admin');
		$admin->description = 'Администратор';
		$admin->ruleName = $rule->name;
		$auth->add($admin);
		$auth->addChild($admin, $manager);
		
		$this->stdout('Done!' . PHP_EOL);
    }
}