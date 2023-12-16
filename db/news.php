<?php
    function get_news() {
        global $db;
        $query = 'SELECT * FROM new';
        $statement = $db->prepare($query);
        $statement->execute();
        $news_list = $statement->fetchAll();
        $statement->closeCursor();
        return $news_list;
    }

    function get_news_limit() {
        global $db;
        $query = 'SELECT * FROM new LIMIT 0,4';
        $statement = $db->prepare($query);
        $statement->execute();
        $news_list = $statement->fetchAll();
        $statement->closeCursor();
        return $news_list;
    }
    function get_news_id($id){
        global $db;
        $query = 'SELECT * FROM new WHERE id = :id';
        $statement = $db->prepare($query);
        $statement->bindValue(":id", $id);
        $statement->execute();
        $news = $statement->fetchAll();
        $statement->closeCursor();
        return $news;
    }
?>