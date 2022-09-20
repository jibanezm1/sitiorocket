<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $titulo
 * @property string $subtitulo
 * @property string $cuerpo
 * @property string $fecha
 * @property int $estado
 * @property string $Usuario
 * @property string $foto
 */
class Post extends \yii\db\ActiveRecord
{
    public $image_src_filename;
    public $image_web_filename;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'subtitulo', 'cuerpo', 'estado', 'Usuario'], 'required'],
            [['cuerpo', 'Usuario', 'foto'], 'string'],
            [['foto'], 'file', 'extensions'=>'jpg, gif, png'],
            [['fecha'], 'safe'],
            [['estado'], 'integer'],
            [['titulo', 'subtitulo'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'subtitulo' => 'Subtitulo',
            'cuerpo' => 'Cuerpo',
            'fecha' => 'Fecha',
            'estado' => 'Estado',
            'Usuario' => 'Usuario',
            'foto' => 'Foto',
        ];
    }
}
