<?php

use yii\db\Migration;

/**
 * Class m200126_145223_insert_comments
 */
class m200126_145223_insert_comments extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        for($i = 1; $i < 5; $i++) {
            for($j = 1; $j < rand(1, 10); $j++) {
                $this->insert('comments', [
                    'content' => "content {$j}",
                    'event_id' => $i,
                ]);
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return false;
    }
}
