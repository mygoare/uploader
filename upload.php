<?php

    if ($_FILES['uploadFile']['size'])
    {
        $s = new SaeStorage();
        $temp = explode(".", $_FILES["uploadFile"]["name"]);
        $extension = end($temp);
        $fileName = uniqid().md5($_FILES['uploadFile']['name']).'.'.$extension;
        $s->upload( 'abc' , $fileName , $_FILES['uploadFile']['tmp_name'] );
        $fileUrl = $s->getUrl( 'abc' , $fileName );
        $fileInfo = array('fileName'=>$_FILES['uploadFile']['name'], 'fileUrl'=> $fileUrl);
        echo stripslashes(json_encode($fileInfo));
    }
    else
    {
        echo stripslashes(json_encode(array('error'=>'No upload file')));
    }


?>
