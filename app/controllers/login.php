<?php
class Login extends Controller {
    public function index()
    {
        session_start();
        session_destroy();
        $data['title'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
        $this->view('template/footer', $data);
    }

    public function config() {
        $data = [
            'email' => $_POST['email'],
            'password' => $_POST['password'],
        ];
    //     $Count= mysqli_num_rows->checkUser;


    //      if ($hitung>0){
    //         $getRole = mysqli_fetch_array->checkUser;
    //         $role = $getRole ['role']

    //         if ($role=='admin'){
    //             $_SESSION['log'] = 'Logged';
    //             $_SESSION['role'] = 'admin';
    //         header('location: ".BASE_URL."/admin')
    //         } else {
    //             $_SESSION['log'] = 'Logged';
    //             $_SESSION['role'] = 'user';
    //         header('location: ".BASE_URL."/user')
    //     }

    //  }else{
    //     echo "Data not found";
    // }
        if( empty($data["email"]) || 
            empty($data["password"])) {
            unset($_POST);
            header("location: ".BASE_URL."/login");
            // isiin alert, lewat param
        } else {
            if($this->model("Users_models")->checkDataByEmail($data) > 0) {
                $row = $this->model("Users_models")->getDataByEmail($data);
                session_start();
                $_SESSION["user"] = [
                    'username' => $row['Username'],
                    'email' => $row['email'],
                ];
                unset($_POST);
                header("location: ".BASE_URL);
            } else {
                unset($_POST);
                header("location: ".BASE_URL."/login");
            }
        }
    }

}