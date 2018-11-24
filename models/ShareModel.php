<?php
/**
 * Created by PhpStorm.
 * User: taghreed
 * Date: 11/21/18
 * Time: 2:20 AM
 */

class ShareModel extends Model {
    public function index(){
        $this->query('SELECT * FROM shares ORDER BY created_at DESC');
        $rows = $this->resultSet();

        return $rows;
    }


    public function add(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

        if ($post['submit']){
            // query for insert
            // bind
            $this->query('INSERT INTO shares (title, body, link, user_id) VALUES(:title, :body, :link, :user_id)');
            $this->bind(':title', $post['title']);
            $this->bind(':body', $post['body']);
            $this->bind(':link', $post['link']);
            $this->bind(':user_id', 1);

            $this->execute();


            // Verify if inserted
            if ($this->lastInsertId()){
                header('Location: '.ROOT_URL.'Shares');
            }
        }
        return;
    }
}