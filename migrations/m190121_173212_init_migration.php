<?php

use yii\db\Migration;

/**
 * Class m190121_173212_init_migration
 */
class m190121_173212_init_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190121_173212_init_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190121_173212_init_migration cannot be reverted.\n";

        return false;
    }
    */
}
