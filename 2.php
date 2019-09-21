<?php
//function cek username
function cekuser($username){
    if (preg_match("/^[a-z]{5,9}$/",$username)) {
        echo "username ".$username." valid";
    } else {
        echo "username ".$username." tidak valid";
    }
    
}
//eksekusi benar tidak nya user
cekuser('@wakwaw');//Ganti @wakwaw sesuai keinginan anda
echo "<br/>";

//function cek password
function cekpass($password){
    if (preg_match("/^[A-Za-z0-9\S$&+,:;=?@#|'<>.^*()%!-]{10}$/",$password)) {
        echo "password ".$password." valid";
    } else {
        echo "password ".$password." tidak valid";
    }
    
}
//eksekusi benar tidak nya password
cekpass('C0d3YourFuture!#');//Ganti @wakwaw sesuai keinginan anda
?>
