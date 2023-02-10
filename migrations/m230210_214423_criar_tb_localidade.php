<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m230210_214423_criar_tb_localidade
 */
class m230210_214423_criar_tb_localidade extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {   
        $this ->createTable('{{%localidades}}',[
            'id' => Schema::TYPE_PK,
            'cidade' => Schema::TYPE_STRING . ' not null',
            'estado' => Schema::TYPE_STRING . ' not null',
        ]);
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%localidades}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230210_214423_criar_tb_localidade cannot be reverted.\n";

        return false;
    }
    */
}
