<?php

class WishList{
private $id;
private $postid;
private $userid;


function setId($id) { $this->id = $id; }
function getId()  { return $this->id; }
function setUserId($userid){ $this->userid = $userid; }
function getUserId() { return $this->userid; }
function setPostId($postid) { $this->postid = $postid; }
function getPostId() { return $this->postid; }
}