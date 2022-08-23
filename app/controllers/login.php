<?php
class login extends Controller {
    public function index()
    {
        $data['title'] = 'login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
    }

public function sign()
    {
        $userData = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $user = $this->model('Users_model')->getUserByUnameNPass($userData);

        if($user > 0)
        {
            $_SESSION['user'] = [
                'Username' => $user['Username'],
                'Email' => $user['Email'],
                'Password' => $user['Password'],
                
            ];
        }
        else 
        {
            header('Location: ' . BASE_URL . '/login');
            exit;
        }

        header('Location: ' . BASE_URL);
        exit;
    }

}