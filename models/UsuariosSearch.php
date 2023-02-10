<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuarios;

/**
 * UsuariosSearch represents the model behind the search form of `app\models\Usuarios`.
 */
class UsuariosSearch extends Usuarios
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'numero_modem', 'patrimonio_monitor', 'patrimonio_cadeira', 'numero_ramal', 'webcam', 'id_localidade', 'id_computador', 'id_headset', 'id_software'], 'integer'],
            [['nome_usuario', 'funcao_usuario', 'tipo_mesa', 'observacao'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuarios::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'numero_modem' => $this->numero_modem,
            'patrimonio_monitor' => $this->patrimonio_monitor,
            'patrimonio_cadeira' => $this->patrimonio_cadeira,
            'numero_ramal' => $this->numero_ramal,
            'webcam' => $this->webcam,
            'id_localidade' => $this->id_localidade,
            'id_computador' => $this->id_computador,
            'id_headset' => $this->id_headset,
            'id_software' => $this->id_software,
        ]);

        $query->andFilterWhere(['like', 'nome_usuario', $this->nome_usuario])
            ->andFilterWhere(['like', 'funcao_usuario', $this->funcao_usuario])
            ->andFilterWhere(['like', 'tipo_mesa', $this->tipo_mesa])
            ->andFilterWhere(['like', 'observacao', $this->observacao]);

        return $dataProvider;
    }
}
