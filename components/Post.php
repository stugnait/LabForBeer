<?php

class Post
{
    public $postID;
    public $category;
    public $name;
    public $shortText;
    public $mainText;
    public $imageLink;

    /**
     * @param $postID
     * @param $category
     * @param $name
     * @param $shortText
     * @param $mainText
     * @param $imageLink
     */
    public function __construct($postID, $category, $name, $shortText, $mainText, $imageLink)
    {
        $this->postID = $postID;
        $this->category = $category;
        $this->name = $name;
        $this->shortText = $shortText;
        $this->mainText = $mainText;
        $this->imageLink = $imageLink;
    }


}