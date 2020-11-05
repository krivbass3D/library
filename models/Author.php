<?php

namespace app\models;

use Yii;
use yii\data\Pagination;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "author".
 *
 * @property int $id
 * @property string|null $firstname
 * @property string|null $surname
 * @property string|null $patronymic
 *
 * @property BookAuthor[] $bookAuthors
 */
class Author extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'author';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname','surname'], 'required'],
            [['surname'], 'string','min' => 3],
            [['firstname', 'surname', 'patronymic'],'string']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'surname' => 'Surname',
            'patronymic' => 'Patronymic',
        ];
    }

    /**
     * Gets query for [[BookAuthors]].
     *
     * @return \yii\db\ActiveQuery
     */

    public function getBooks()
    {
        return $this->hasMany(Book::className(), ['id' => 'book_id'])
            ->viaTable('book_author', ['author_id' => 'id']);
    }

    public function getAuthorsCount()
    {
        return $this->getAuthors()->count();
    }
}
