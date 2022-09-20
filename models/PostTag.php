<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post_tag".
 *
 * @property int $id
 * @property int $idpost
 * @property int $idtag
 */
class PostTag extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post_tag';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idpost', 'idtag'], 'required'],
            [['idpost', 'idtag'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idpost' => 'Idpost',
            'idtag' => 'Idtag',
        ];
    }
}
