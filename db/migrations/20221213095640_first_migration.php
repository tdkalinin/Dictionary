<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class FirstMigration extends AbstractMigration
{
    // Create 'users' and 'words' 
    public function change()
    {
        $table = $this->table("users", ["id" => "id"]);
        $table->addColumn("nickname", "string")
              ->addColumn("password", "integer")
              ->create();

        $table = $this->table("words", ["id" => "id"]);
        $table->addColumn("word", "text")
              ->addColumn("meaning", "text")
              ->create();
    }
}
