<?php

use yii\db\Migration;

class m170115_114734_test extends Migration
{
    public function up()
    {
$this->createTable('test', [
    'id' => $this->primaryKey(),
    'title' => $this->string(),
    'text' => $this->text(),
    'user_id' => $this->integer()
]);
    }

    public function down()
    {
        $this->dropTable('test');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
