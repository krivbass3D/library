<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%book}}`.
 */
class m201031_113817_create_book_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('book', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(),
            'description'=>$this->text(),
            'image'=>$this->string(),
            'date'=>$this->date(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('book');
    }
}
