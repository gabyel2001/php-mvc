<?php

class m0001_initial
{
    private \theworker\phpmvc\db\Database $db;

    public function __construct()
    {
        $this->db = \theworker\phpmvc\Application::$app->db;
    }

    public function up()
    {
        $SQL = "CREATE TABLE users(
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                status TINYINT NOT NULL DEFAULT 1,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
              ) ENGINE=INNODB";
        $this->db->pdo->exec($SQL);
    }

    public function down()
    {
        $SQL = "DROP TABLE users";
        $this->db->pdo->exec($SQL);
    }

}