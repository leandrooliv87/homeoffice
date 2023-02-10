<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m230210_215710_criar_tb_headset
 */
class m230210_215710_criar_tb_headset extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%headset}}', [
            'id' => Schema::TYPE_PK,
            'marca_headset' => Schema::TYPE_STRING . ' not null',
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%headset}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230210_215710_criar_tb_headset cannot be reverted.\n";

        return false;
    }
    */
}
