<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m230210_215305_criar_tb_computadores
 */
class m230210_215305_criar_tb_computadores extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%computadores}}', [
            'id' => Schema::TYPE_PK,
            'tipo_computador' => Schema::TYPE_STRING . ' not null',
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%computadores}}');
        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230210_215305_criar_tb_computadores cannot be reverted.\n";

        return false;
    }
    */
}
