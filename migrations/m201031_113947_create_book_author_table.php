<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book_author}}`.
 */
class m201031_113947_create_book_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('book_author', [
            'id' => $this->primaryKey(),
            'book_id'=>$this->integer(),
            'author_id'=>$this->integer()
        ]);

        // creates index for column `book_id`
        $this->createIndex(
            'book_author_book_id',
            'book_author',
            'book_id'
        );


        // add foreign key for table `book`
        $this->addForeignKey(
            'book_author_book_id',
            'book_author',
            'book_id',
            'book',
            'id',
            'CASCADE'
        );

        // creates index for column `author_id`
        $this->createIndex(
            'book_author_author_id',
            'book_author',
            'author_id'
        );


        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-author_id',
            'book_author',
            'author_id',
            'author',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('book_author');
    }
}
