<?php

use yii\db\Migration;

class m170928_122325_create_table_iphone extends Migration
{
    public function safeUp()
    {
		$this->createTable('reviews', [
			'r_id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'tel' => $this->string()->notNull(),
			'review' => $this->string()->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);
    }

    public function safeDown()
    {
        echo "m170928_122325_create_table_iphone cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170928_122325_create_table_iphone cannot be reverted.\n";

        return false;
    }
    */
}
