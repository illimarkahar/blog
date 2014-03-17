<?php

class tags extends Controller{

    function index(){
        $this->tags = get_all("SELECT tag_id, tag_name, COUNT(post_id) AS count
		 FROM post_tags NATURAL JOIN tag
		 GROUP BY tag_id");
    }

    function view(){

        $tag_id= $this->params[0];
        $this->posts = get_all("SELECT post.*, user.username
		 FROM post_tags NATURAL JOIN post NATURAL JOIN user WHERE tag_id='$tag_id'
		 ");
    }
}