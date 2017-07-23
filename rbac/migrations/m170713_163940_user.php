<?php

use dektrium\rbac\migrations\Migration;

class m170713_163940_user extends Migration
{
    public function safeUp()
    {
    	$auth = Yii::$app->authManager;
    	// add "createPost" permission
        $createUser = $auth->createPermission('createUser');
        $createUser->description = 'Crear usuarios';
        $auth->add($createUser);

        // add "updatePost" permission
        $updateUser = $auth->createPermission('updateUser');
        $updateUser->description = 'Actualizar usuarios';
        $auth->add($updateUser);

        $deleteUser = $auth->createPermission('deleteUser');
        $deleteUser->description = 'Eliminar usuarios';
        $auth->add($deleteUser);

        //jaulas
		$createCage = $auth->createPermission('createCage');
        $createCage->description = 'Crear jaula';
        $auth->add($createCage);

		$updateCage = $auth->createPermission('updateCage');
        $createCage->description = 'Actualizar jaula';
        $auth->add($createCage);

        $deleteCage = $auth->createPermission('deleteCage');
        $deleteCage->description = 'Eliminar jaula';
        $auth->add($deleteCage);


        // add "admin" role and give this role the "updatePost" permission
        // as well as the permissions of the "author" role
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $createUser);
        $auth->addChild($admin, $updateUser);        

        // Assign roles to users. 1 and 2 are IDs returned by IdentityInterface::getId()
        // usually implemented in your User model.

        $auth->assign($admin, 1);
    }
    
    public function safeDown()
    {
        echo "m170713_163940_user cannot be reverted.\n";
        
        return false;
    }
}
