<?php

use yii\db\Migration;

class m170929_112030_create_table_purchase extends Migration
{
    public function safeUp()
    {
		$this->createTable('purchase', [
			'p_id' => $this->primaryKey(),
			'name' => $this->string()->notNull(),
			'tel' => $this->string()->notNull(),
			'prod' => $this->string()->notNull(),
			'created_at' => $this->integer(),
			'updated_at' => $this->integer(),
		]);
    }

    public function safeDown()
    {
        echo "m170929_112030_create_table_purchase cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170929_112030_create_table_purchase cannot be reverted.\n";

        return false;
    }
    */
}
