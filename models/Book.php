<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "book".
 *
 * @property int $id
 * @property string $book_name
 * @property string $price
 * @property string $author
 * @property string $publisher
 * @property string $factroy_name
 * @property int $count_order
 */
class Book extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'book';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price'], 'number'],
            [['count_order'], 'integer'],
            [['book_name', 'author', 'publisher', 'factroy_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'book_name' => '书名',
            'price' => '价格',
            'author' => '作者',
            'publisher' => '出版社',
            'factroy_name' => '印刷厂商',
            'count_order' => '数量',
        ];
    }
}
