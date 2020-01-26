<?php

use yii\db\Migration;

/**
 * Class m200126_145212_insert_events
 */
class m200126_145212_insert_events extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        for($i = 1; $i < 5; $i++) {
            $this->insert('events', [
                'title' => "title {$i}",
                'content' => "content {$i}",
            ]);
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
