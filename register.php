
<?php
if(isset($_POST['login'])){
    $uname = filter_var($_POST['uname'], FILTER_SANITIZE_STRING);
    $pword = filter_var($_POST['pword'], FILTER_SANITIZE_STRING);
    session_start();
    $url = 'userdata.json'; // path to JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $details = json_decode($data, true); // decode the JSON feed

    $user_found = FALSE;
    foreach ($details as $detail) {
        /* Check Username and Password existence in defined array */
        if ($detail["username"] == $uname) {
            $user_found = TRUE;
            break;
        }else{
            $user_found = FALSE;
        }
    }
    if(!$user_found){
        $newdata=array();
        $arr = array(
            "username" => $uname,
            "password" => $pword
        );
        array_push($details, $arr);
        $new_data = json_encode($details);
        file_put_contents($url, $new_data);
        $_SESSION['msg']  = "<script type='text/javascript'>toastr.success('Account was successfully added')</script>";
    }else{
        $_SESSION['msg'] = "<script type='text/javascript'>toastr.error('Failed to add account, $uname already exist')</script>";
       
    }
    
}
?>
