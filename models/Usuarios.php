<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

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
            'nome_usuario' => 'Nome do Usuário',
            'funcao_usuario' => 'Função do Usuário',
            'numero_modem' => 'Número do Modem',
            'patrimonio_monitor' => 'Patrimônio do Monitor',
            'patrimonio_cadeira' => 'Patrimônio da Cadeira',
            'tipo_mesa' => 'Tipo da Mesa',
            'numero_ramal' => 'Número do Ramal',
            'webcam' => 'Webcam',
            'observacao' => 'Observação',
            'id_localidade' => 'Localidade',
            'id_computador' => 'Tipo do Computador',
            'id_headset' => 'Marca do Headset',
            'id_software' => 'Software de Ligação',
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

    public static function getComputadores()
    {
        $computadores = Computadores::find()->orderBy('tipo_computador ASC')->all();
        return ArrayHelper::map($computadores, 'id', 'tipo_computador');
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

    public static function getHeadsets()
    {
        $headsets = Headset::find()->orderBy('marca_headset ASC')->all();
        return ArrayHelper::map($headsets, 'id', 'marca_headset');
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

    public static function getLocalidades()
    {
        $cidades = Localidades::find()->orderBy('cidade ASC')->all();
        return ArrayHelper::map($cidades, 'id', 'cidade');
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

    public static function getSoftwares()
    {
        $softwares = Software::find()->orderBy('software_ligacao ASC')->all();
        return ArrayHelper::map($softwares, 'id', 'software_ligacao');
    }
}
