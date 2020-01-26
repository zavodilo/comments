<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comments}}`.
 */
class m200126_140309_create_comments_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('comments', [
            'id' => $this->primaryKey(),
            'content' => $this->text(),
            'event_id' => $this->integer()->notNull(),
        ]);

        $this->createIndex(
            'idx-comment-event_id',
            'comments',
            'event_id'
        );

        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-comments-event_id',
            'comments',
            'event_id',
            'events',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey(
            'fk-comments-event_id',
            'comments'
        );

        $this->dropIndex(
            'idx-comment-event_id',
            'comments'
        );

        $this->dropTable('comments');
    }
}
