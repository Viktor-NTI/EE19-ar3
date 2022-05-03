<?php
class UserValidator {

    private $data;
    private $errors = [];
    private $fields = ['username', 'email'];

    public function __construct($postData)
    {
        $this->data = $postData;
    }

    public function validateUsername()
    {
        //echo "<p>{$this->data['username']}</p>";
        // Kolla längd 5-15 tecken
        if (strlen($this->data['username']) < 5 || strlen($this->data['username']) > 15) {
            echo "<p>Användarnamnet måste vara mellan 5-15 tecken</p>";
        }
    }

    public function validateEmail()
    {
        if (strlen($this->data['email']) < 10 || strlen($this->data['email']) > 25) {
            echo "<p>Email måste vara mellan 10-25 tecken</p>";
        }
    }
}