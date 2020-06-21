<?php



    /**
     * starting session
     */
    session_start();

    /**
     * input login-user
     */
    $login = $_POST['email'];
    $password_login = $_POST['senha'];

    function validate($login,$password_login){
        $autenticate_login = false;
        $type_user = null;

        /**
         * null fields errors
         */
        if($login == null || $password_login == null){
            header('Location: index.php?email=erro2');
            return;
        }

        if($login != NAN && $password_login != NAN){
            $arq_users = fopen('valid_users.hd','r');
            $arq_passwords = fopen('valid_passwords.hd','r');

            while(!feof($arq_users) && !feof($arq_passwords))
            {
               
                $user_db = fgets($arq_users);
                $email = substr($user_db,1,strlen($user_db));
                
                $password_db = fgets($arq_passwords);
                $password = substr($password_db,0,strlen($password_db));
              
                if(!strcmp($login, $email) && !strcmp($password_login, $password)){
                    $autenticate_login = true;
                    $type_user = substr($user_db,0,1);
                    break;
                }
                /**
                 * for some reason the result of this equal inputs were giving -2 so
                 */
                if (strcmp($login, $email)==-2 && strcmp($password_login, $password)==-2) {
                    $autenticate_login = true;
                    $type_user = substr($user_db, 0, 1);
                    break;
                }
            }
            /**
             * show de login error password or email
             */
            if($autenticate_login == false){
                header('Location: index.php?email=erro');
                return;
            }  
            /**
             * login success
             */
            else{
                $_SESSION['autenticated'] = 'YES';
                $_SESSION['type_user'] = $type_user;
                $_SESSION['user'] = $login;
                header('Location: home.php');
            }
        }
    }


    validate($login,$password_login);




?>