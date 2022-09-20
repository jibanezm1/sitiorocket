<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contacto".
 *
 * @property int $id
 * @property string $nombre
 * @property string $motivo
 * @property string $mail
 * @property string $telefono
 * @property string $sujeto
 * @property string $servicio
 */
class Contacto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contacto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'motivo', 'mail', 'telefono', 'sujeto', 'servicio'], 'required'],
            [['nombre', 'motivo', 'mail', 'telefono', 'sujeto', 'servicio'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'motivo' => 'Motivo',
            'mail' => 'Mail',
            'telefono' => 'Telefono',
            'sujeto' => 'Sujeto',
            'servicio' => 'Servicio',
        ];
    }
}
