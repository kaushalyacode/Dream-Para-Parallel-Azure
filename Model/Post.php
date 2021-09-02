<?php

class Post{
private $id;
private $image;
private $description;
private $price;
private $province;
 private $city;
 private $rtype;
 private $distance;
 private $userid;

function setId($id) { $this->id = $id; }
function getId()  { return $this->id; }
function setImage($image){ $this->image = $image; }
function getImage() { return $this->$image; }
function setDescription($description) { $this->description = $description; }
function getDescription() { return $this->description; }
function setPrice($price) { $this->price = $price; }
function getPrice() { return $this->price; }
function setProvince($province) { $this->province = $province; }
function getProvince() { return $this->province; }
function setCity($city) { $this->city = $city; }
function getCity() { return $this->city; }
function setRtype($rtype) { $this->rtype = $rtype; }
function getRtype() { return $this->rtype; }
function setDistance($distance) { $this->distance = $distance; }
function getDistance() { return $this->distance; }
function setUserid($userid) { $this->userid = $userid; }
function getUserid()  { return $this->userid; }
}