<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m230210_220241_criar_tb_software
 */
class m230210_220241_criar_tb_software extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%software}}', [
            'id' => Schema::TYPE_PK,
            'software_ligacao' => Schema::TYPE_STRING . ' not null',
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%software}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230210_220241_criar_tb_software cannot be reverted.\n";

        return false;
    }
    */
}
