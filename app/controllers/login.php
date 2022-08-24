<?php
class Login extends Controller {
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer', $data);
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

    public function config() {
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
        if( empty($data["email"]) ||
            empty($data["password"])) {
            unset($_POST);
            header("location: ".BASE_URL."/login");
            // isiin alert, lewat param
        } else {
            if($this->model("Users_models")->checkDataByEmail($data) > 0) {
                // session
                unset($_POST);
                header("location: ".BASE_URL);
            } else {
                unset($_POST);
                header("location: ".BASE_URL."/login");
            }
        }
    }

}