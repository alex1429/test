<?php

use yii\db\Migration;

class m160623_110851_initdb extends Migration
{
    public function up()
    {
		
		$this->createTable('category', [
			'id' => $this->primaryKey(),
			'title' => $this->string(255)->notNull(),
		]);
		
		$this->createTable('item', [
			'id' => $this->primaryKey(),
			'category_id' => $this->integer()->notNull(),
			'title' => $this->string(255)->notNull(),
			'description' => $this->text(),
			'image' => $this->string(255),
			'price' => $this->decimal(10, 2),
		]);
		
		$this->addForeignKey('fk_category', 'item', 'category_id', 'category', 'id', 'RESTRICT', 'CASCADE');
		
		
		
		//users
		$this->insert('user', [
			'username' => 'admin',
			'role' => 10,
			'auth_key' => 'xfrWwbgG2siDQE0X9Y57tB4BxtfKYsfK',
			'password_hash' => '$2y$13$AiE1RFUT4hDLeJDMQ.Mue.OZs5ySyzQZ7z5cFSlnVdD1Va7S7F3tC',
			'email' => 'admin@localhost.com',
			'status' => 10,
			'created_at' => 1466771542,
			'updated_at' => 1466771542,
		]);
		$this->insert('user', [
			'username' => 'manager',
			'role' => 5,
			'auth_key' => 'Ssvio_yLVX2d4zbiuBaqjpZEj5OW8M6P',
			'password_hash' => '$2y$13$fAQALHtHMFBQgUCBu.lWsuzTvcT33wcelp9srjHk9jGzr4u9g4J16',
			'email' => 'manager@localhost.com',
			'status' => 10,
			'created_at' => 1466771903,
			'updated_at' => 1466771903,
		]);
		
		
		
		
		//categories
		$this->insert('category', [
			'title' => 'Ноутбуки',
		]);
		$this->insert('category', [
			'title' => 'Телефоны',
		]);
		$this->insert('category', [
			'title' => 'Телевизоры',
		]);
		
		//items
		
		$this->insert('item', [
			'title' => 'Ноутбук Acer Aspire ES1-531-P5DN NX.MZ8ER.044',
			'category_id' => 1,
			'description' => 'Ноутбук Acer Aspire ES1-531-P5DN оснащён четырёхъядерным процессором Intel и оперативной памятью с большим объёмом. Благодаря этому он может использоваться для выполнения большинства задач - от бытовых до профессиональных.',
			'image' => '/items/30024065m.jpg',
			'price' => '29990',
		]);
		$this->insert('item', [
			'title' => 'Ноутбук Lenovo IdeaPad G50-45 (80E301KARK)',
			'category_id' => 1,
			'description' => 'Ноутбук Lenovo IdeaPad G50-45 укомплектован четырёхъядерным процессором AMD и дискретным графическим адаптером с 2 Гб выделенной памяти. Благодаря этому он может работать с большинством современных приложений, в том числе и в режиме многозадачности.',
			'image' => '/items/30024065m.jpg',
			'price' => '26890',
		]);
		$this->insert('item', [
			'title' => 'Ноутбук HP 15-af109ur P0G60EA',
			'category_id' => 1,
			'description' => 'Ноутбуки HP — это идеальное сочетание функциональности, надежности и дизайна. Стиль, производительность и выгодная цена — сочетание, которое встречается нечасто.',
			'image' => '/items/30024065m.jpg',
			'price' => '29990',
		]);
		$this->insert('item', [
			'title' => 'Ноутбук ASUS K501LB-DM140T',
			'category_id' => 1,
			'description' => 'Ноутбук ASUS K501LB - универсальное мультимедийное устройство, которое отлично подойдёт как для профессионального дизайнера, так для геймера или для любителя качественных фильмов. Он оснащён 15,6-дюймовым экраном с Full HD-матрицей. Изображение на нём выглядит реалистичным за счёт естественной цветопередачи и превосходной детализации.',
			'image' => '/items/30024065m.jpg',
			'price' => '45990',
		]);
		$this->insert('item', [
			'title' => 'Ноутбук Acer Aspire ES1-520-38XM NX.G2JER.015',
			'category_id' => 1,
			'description' => 'Ноутбук Acer Aspire ES1-520-38XM оснащён 15,6-дюймовым экраном, созданным с применением технологии TFT. Изображение на нём выглядит реалистичным за счёт высокой яркости и контрастности. Кроме того, пользователь может присоединить к устройству дополнительный монитор или проектор с помощью разъёма HDMI - эта функция будет особенно удобна для проведения презентаций и просмотра фильмов.',
			'image' => '/items/30024065m.jpg',
			'price' => '18990',
		]);
		
    }

    public function down()
    {
        echo "m160623_110851_initdb cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
