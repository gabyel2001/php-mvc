<?php

class m0002_add_password_column
{
    private \theworker\phpmvc\Database $db;

    public function __construct()
    {
        $this->db = \theworker\phpmvc\Application::$app->db;
    }

    public function up()
    {
        $SQL = "ALTER TABLE users ADD COLUMN password VARCHAR(255) NOT NULL";
        $this->db->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "ALTER TABLE users DROP COLUMN password";
        $this->db->pdo->exec($SQL);
    }

}