<?php

class posts extends Controller{

    function index(){
        $this->posts = get_all("SELECT * FROM post NATURAL JOIN user");
        $_tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag");
        $this->tags = array();
        foreach ($_tags as $tag){
            $this->tags[$tag['post_id']][]= array('tag_id'=>$tag['tag_id'], 'tag_name'=>$tag['tag_name']);
        }
    }

    function index_ajax(){
        echo "\$_POST:<br>";
    }

    function index_post(){
        echo "\$_POST:<br>";
    }

    function view() {
        $post_id = $this->params[0];
        $this->post = get_first("SELECT * FROM post NATURAL JOIN user WHERE post_id='$post_id'");
        $this->tags=get_all("SELECT * FROM post_tags NATURAL JOIN tag WHERE post_id='$post_id'");


    }
}


