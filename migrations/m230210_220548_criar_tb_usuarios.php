<?php

use yii\db\Migration;
use yii\db\Schema;

/**
 * Class m230210_220548_criar_tb_usuarios
 */
class m230210_220548_criar_tb_usuarios extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%usuarios}}', [
            'id' => Schema::TYPE_PK,
            'nome_usuario' => Schema::TYPE_STRING . ' not null',
            'funcao_usuario' => Schema::TYPE_STRING . ' not null',
            'numero_modem' => Schema::TYPE_INTEGER . ' null',
            'patrimonio_monitor' => Schema::TYPE_INTEGER . ' null',
            'patrimonio_cadeira' => Schema::TYPE_INTEGER . ' null',
            'tipo_mesa' => Schema::TYPE_STRING . ' null',
            'numero_ramal' => Schema::TYPE_INTEGER . ' null',
            'webcam' => Schema::TYPE_BOOLEAN . ' not null default FALSE',
            'observacao' => Schema::TYPE_TEXT . ' null',
            'id_localidade' => Schema::TYPE_INTEGER . ' not null',
            'id_computador' => Schema::TYPE_INTEGER . ' not null',
            'id_headset' => Schema::TYPE_INTEGER . ' not null',
            'id_software' => Schema::TYPE_INTEGER . ' not null',
        ]);

        $this->addForeignKey('id_localidade_fk', '{{%usuarios}}', 'id_localidade', '{{%localidades}}', 'id');
        $this->addForeignKey('id_computador_fk', '{{%usuarios}}', 'id_computador', '{{%computadores}}', 'id');
        $this->addForeignKey('id_headset_fk', '{{%usuarios}}', 'id_headset', '{{%headset}}', 'id');
        $this->addForeignKey('id_software_fk', '{{%usuarios}}', 'id_software', '{{%software}}', 'id');

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%usuarios}}');
        $this->dropForeignKey('id_localidade_fk', '{{%usuarios}}');
        $this->dropForeignKey('id_computador_fk', '{{%usuarios}}');
        $this->dropForeignKey('id_headset_fk', '{{%usuarios}}');
        $this->dropForeignKey('id_software_fk', '{{%usuarios}}');

        return true;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230210_220548_criar_tb_usuarios cannot be reverted.\n";

        return false;
    }
    */
}
