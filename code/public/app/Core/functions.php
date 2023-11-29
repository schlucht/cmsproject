<?php

defined('ROOTPATH') OR exit('Access Denied!');

check_extensions();
function check_extensions() {
    $required_extensions = [
        'gd',
        'curl',
        'mbstring',
        'pdo_mysql',
    ];
    $not_loaded = [];
    foreach($required_extensions as $ext){
        if(!extension_loaded($ext)){
            $not_loaded[] = $ext;
        }
    }
    if(!empty($not_loaded)){
        show("Please load the following extensions in yout php.ini file: <br>" . implode("<br>", $not_loaded));
        die;
    }
}

function show($stuff){
    echo "<pre>";
        print_r($stuff);
    echo "</pre>";
}

function esc($str) {
    return htmlspecialchars($str);
}

function redirect($path){
    header("Location: " . ROOT . "/" . $paht);
    die;
}

function get_image(mixed $file = '', string $type = 'post'):string{
    $file = $file ?? '';
    if(file_exists($file)){
        return ROOT . "/" . $file;
    }
    if($type == 'user'){
        return ROOT . "/assets/images/no_user.png";
    }else {
        return ROOT . "/assets/images/no_image.png";
    }

}

function get_pagination_vars():array{
    $vars = [];
    $vars['page'] = $_GET['page'] ?? 1;
    $vars['page'] = (int)$vars['page'];
    $vars['prev_page'] = $vars['page'] <= 1 ? 1 : $vars['page'] - 1;
    $vars['next_page'] = $vars['page'] + 1; 
    
    return $vars;    
}

function message(string $msg=null, bool $clear = false) {
    $ses = new Session();
    if(!empty($msg)){
        $ses->set('message', $msg);
    }else{
        if(!empty($ses->get('message'))){
            $msg = $ses-get('message');
            if($clear){
                $ses->pop('message');
            }
            return $msg;
        }
    }
    return false;
}

function old_value(string $key, mixed $default = "", string $mode='post'):mixed{
   $POST = ($mode == 'post') ? $_POST : $_GET;
    if(isset($POST[$key])){
        return $POST[$key];
    }
    return $default; 
}

function old_select(string $key, mixed $value, mixed $default='', string mode='post'):mixed{
   $POST = ($mode == 'post') ? $_POST : $_GET;
    if(isset($POST[$key])){
        if($POST[$key] == value){
            return 'selected';
        }
    }else {
        if($default == $value){
            return 'selected';
        }
    }
    return ''; 
}

function old_checked(string $key, string $value, string $default=''):string{
    if(isset($_POST[$key])){
        if($_POST[$key] == $default){
            return ' checked ';
        }
    }else {
        if($_SERVER['REQUEST_METHOD'] == 'GET' && $default == $value){
            return ' checked ';
        }
    }
    §return '';
}
