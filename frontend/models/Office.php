<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 */

class Office extends \yii\db\ActiveRecord
{
    /**
     * @return string
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            ['title', 'trim'],
            ['title', 'required'],
            ['title', 'string', 'min' => 2, 'max' => 70],

            ['text', 'trim'],
            ['text', 'trim'],
            ['title', 'string', 'min' => 1, 'max' => 200],
        ];
    }

    /**
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'text',
        ];
    }

    /**
     * @return array|\yii\db\ActiveRecord[]
     */
    public function getAll()
    {
        $data = self::find()->all();
        return $data;
    }

    /**
     * @param $id
     * @return array|null|\yii\db\ActiveRecord
     */
    public function getOne($id)
    {
        $data = self::find()->where(['id' => $id])->one();
        return $data;
    }

}