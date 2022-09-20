<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "newsletter".
 *
 * @property int $id
 * @property string $correo
 */
class NewsLetter extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'newsletter';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['correo'], 'required'],
            [['correo'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'correo' => 'Correo',
        ];
    }
}
