<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%author}}`.
 */
class m201031_113911_create_author_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function Up()
    {
        $this->createTable('author', [
            'id' => $this->primaryKey(),
            'firstname'=>$this->string(),
            'surname'=>$this->string(),
            'patronymic'=>$this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function Down()
    {
        $this->dropTable('author');
    }
}
