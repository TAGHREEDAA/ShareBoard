<?php
/**
 * Created by PhpStorm.
 * User: taghreed
 * Date: 11/21/18
 * Time: 2:20 AM
 */

class UserModel extends Model {

    public function register(){
        // 1- filter sanitize inputs
        // 2- check post submitted
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']){

            if ($post['name']=== "" || $post['email']=== "" ||
                $post['password']=== "" || $post['confirm_password']=== "" ){

                Messages::setMessage('Please Fill All Fields!', 'error');
                return;
            }

            // prepare query
            $this->query('INSERT INTO users (name, email, password) VALUES(:name, :email, :password)');

            // bind params
            $this->bind(':name',$post['name']);
            $this->bind(':email',$post['email']);
            $this->bind(':password',md5($post['password']));


            // execute
            $this->execute();
            // check if inserted
            if ($this->lastInsertId()){
                header('Location: '.'users/login');
            }

        }
    }

    public function login(){
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        if ($post['submit']){

            // take the data
            // encrypt password
            // search in DB
            // if found log me in >> Set session
            // redirect to shares
            $this->query('SELECT * FROM users WHERE email=:email AND password= :password');

            $this->bind(':email',$post['email']);
            $this->bind(':password',md5($post['password']));


            $result = $this->single();
            if ($result){

                Messages::setMessage('Logged in successfully','success');
                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = [
                  'id'      =>$result['id'],
                  'name'    =>$result['name'],
                  'email'   =>$result['email']
                ];

                header('Location: '.ROOT_URL.'Shares');
            }
            else{

                Messages::setMessage('Failed to log in!', 'error');
            }
        }

    }
}