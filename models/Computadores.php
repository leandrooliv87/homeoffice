<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "computadores".
 *
 * @property int $id
 * @property string $tipo_computador
 *
 * @property Usuarios[] $usuarios
 */
class Computadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'computadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo_computador'], 'required'],
            [['tipo_computador'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo_computador' => 'Tipo do Computador',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id_computador' => 'id']);
    }
}
