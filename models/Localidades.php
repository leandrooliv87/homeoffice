<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "localidades".
 *
 * @property int $id
 * @property string $cidade
 * @property string $estado
 *
 * @property Usuarios[] $usuarios
 */
class Localidades extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'localidades';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cidade', 'estado'], 'required'],
            [['cidade', 'estado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id_localidade' => 'id']);
    }
}
