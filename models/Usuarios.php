<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nome_usuario
 * @property string $funcao_usuario
 * @property int|null $numero_modem
 * @property int|null $patrimonio_monitor
 * @property int|null $patrimonio_cadeira
 * @property string|null $tipo_mesa
 * @property int|null $numero_ramal
 * @property int $webcam
 * @property string|null $observacao
 * @property int $id_localidade
 * @property int $id_computador
 * @property int $id_headset
 * @property int $id_software
 *
 * @property Computadores $computador
 * @property Headset $headset
 * @property Localidades $localidade
 * @property Software $software
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome_usuario', 'funcao_usuario', 'id_localidade', 'id_computador', 'id_headset', 'id_software'], 'required'],
            [['numero_modem', 'patrimonio_monitor', 'patrimonio_cadeira', 'numero_ramal', 'webcam', 'id_localidade', 'id_computador', 'id_headset', 'id_software'], 'integer'],
            [['observacao'], 'string'],
            [['nome_usuario', 'funcao_usuario', 'tipo_mesa'], 'string', 'max' => 255],
            [['id_computador'], 'exist', 'skipOnError' => true, 'targetClass' => Computadores::class, 'targetAttribute' => ['id_computador' => 'id']],
            [['id_headset'], 'exist', 'skipOnError' => true, 'targetClass' => Headset::class, 'targetAttribute' => ['id_headset' => 'id']],
            [['id_localidade'], 'exist', 'skipOnError' => true, 'targetClass' => Localidades::class, 'targetAttribute' => ['id_localidade' => 'id']],
            [['id_software'], 'exist', 'skipOnError' => true, 'targetClass' => Software::class, 'targetAttribute' => ['id_software' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome_usuario' => 'Nome Usuario',
            'funcao_usuario' => 'Funcao Usuario',
            'numero_modem' => 'Numero Modem',
            'patrimonio_monitor' => 'Patrimonio Monitor',
            'patrimonio_cadeira' => 'Patrimonio Cadeira',
            'tipo_mesa' => 'Tipo Mesa',
            'numero_ramal' => 'Numero Ramal',
            'webcam' => 'Webcam',
            'observacao' => 'Observacao',
            'id_localidade' => 'Id Localidade',
            'id_computador' => 'Id Computador',
            'id_headset' => 'Id Headset',
            'id_software' => 'Id Software',
        ];
    }

    /**
     * Gets query for [[Computador]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getComputador()
    {
        return $this->hasOne(Computadores::class, ['id' => 'id_computador']);
    }

    /**
     * Gets query for [[Headset]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHeadset()
    {
        return $this->hasOne(Headset::class, ['id' => 'id_headset']);
    }

    /**
     * Gets query for [[Localidade]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocalidade()
    {
        return $this->hasOne(Localidades::class, ['id' => 'id_localidade']);
    }

    /**
     * Gets query for [[Software]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSoftware()
    {
        return $this->hasOne(Software::class, ['id' => 'id_software']);
    }
}
