<?php

use yii\db\Migration;

class m170929_160716_alter_table_reviews extends Migration {
	public function safeUp() {
		$this->addColumn('reviews', 'review_type', $this->integer()->defaultValue(1));
	}

	public function safeDown() {
		echo "m170929_160716_alter_table_reviews cannot be reverted.\n";

		return false;
	}

	/*
	// Use up()/down() to run migration code without a transaction.
	public function up()
	{

	}

	public function down()
	{
		echo "m170929_160716_alter_table_reviews cannot be reverted.\n";

		return false;
	}
	*/
}
