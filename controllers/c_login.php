<?php
if($aksi=='index'){
    $data['title'] = "Halaman Login";
    $helpers->load_view('login/login.php',$data);
    
}else if($aksi=='Send'){
    echo"sedang diproses";
}