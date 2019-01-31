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
		$this->createTable('ps',[
			'id' => $this->primaryKey(),
			'number' => $this->string()->unique(),
			'name' => $this->string()->unique()
		]);
		
		$this->createTable('connection',[
			'id' => $this->primaryKey(),
			'name' => $this->string(),
			'ps_id' => $this->integer(),
			'instruction_id' => $this->integer(),
			'scheme_id' => $this->integer()
		]);
		
		$this->createTable('instruction',[
			'id' => $this->primaryKey(),
			'connection_id' => $this->integer(),
			'name' => $this->string()
		]);
		
		$this->createTable('scheme',[
			'id' => $this->primaryKey(),
			'connection_id' => $this->integer(),
			'name' => $this->string()
		]);
		
		$this->createTable('test', [
			'id' => $this->primaryKey(),
			'name' => $this->string()->unique()
		]);
		
		$this->createTable('question', [
			'id' => $this->primaryKey(),
			'test_id' => $this->integer(),
			'link' => $this->string(),
			'question' => $this->text(),
			'answer' => $this->text(),
			'image' => $this->string()
		]);
		
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
		$this->dropTable('ps');
		$this->dropTable('connection');
		$this->dropTable('instruction');
		$this->dropTable('scheme');
		$this->dropTable('test');
		$this->dropTable('question');
    }

}
