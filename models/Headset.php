<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "headset".
 *
 * @property int $id
 * @property string $marca_headset
 *
 * @property Usuarios[] $usuarios
 */
class Headset extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'headset';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['marca_headset'], 'required'],
            [['marca_headset'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'marca_headset' => 'Marca Headset',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id_headset' => 'id']);
    }
}
