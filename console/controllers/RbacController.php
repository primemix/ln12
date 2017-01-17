<?php

namespace console\controllers;

use Yii;
use yii\console\Controller;

/**
 * Class RbacController
 * @package console\controllers
 *  php yii rbac/init
 */
class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        /* delete all data from db */
        $auth->removeAll();

        /* Create role admin, editor, guest */
        $admin = $auth->createRole('admin');
        $editor = $auth->createRole('editor');
        $guest = $auth->createRole('guest');

        /* Added role to db */
        $auth->add($admin);
        $auth->add($editor);
        $auth->add($guest);

        /* Added permission */
        $updateOfficePage = $auth->createPermission('updateOfficePage');
        $updateOfficePage->description = 'Update office page';

        /* Added permission */
        $createOfficePage = $auth->createPermission('CreateOfficePage');
        $createOfficePage->description = 'Create office page';

        /* Added permission to db */
        $auth->add($updateOfficePage);
        $auth->add($createOfficePage);

        $auth->addChild($editor, $updateOfficePage);

        $auth->assign($admin, 1);
        $auth->assign($editor, 2);
    }
}