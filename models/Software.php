<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "software".
 *
 * @property int $id
 * @property string $software_ligacao
 *
 * @property Usuarios[] $usuarios
 */
class Software extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'software';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['software_ligacao'], 'required'],
            [['software_ligacao'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'software_ligacao' => 'Software Ligacao',
        ];
    }

    /**
     * Gets query for [[Usuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuarios::class, ['id_software' => 'id']);
    }
}
