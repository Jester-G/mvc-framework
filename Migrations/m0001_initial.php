<?php

class m0001_initial
{
    public function up()
    {
        $db = \jesterone\mvccore\Application::$app->db;
        $sql = "CREATE TABLE users (
                id INT AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(255) NOT NULL,
                firstname VARCHAR(255) NOT NULL,
                lastname VARCHAR(255) NOT NULL,
                status TINYINT NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            ) ENGINE=INNODB DEFAULT CHARSET=utf8;";

        $db->pdo->exec($sql);
    }

    public function down()
    {
        $db = \jesterone\mvccore\Application::$app->db;
        $sql = "DROP TABLE users";

        $db->pdo->exec($sql);
    }
}