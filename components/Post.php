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
    public function __construct($postID, $category, $name, $shortText, $mainText)
    {
        $this->postID = $postID;
        $this->category = $category;
        $this->name = $name;
        $this->shortText = $shortText;
        $this->mainText = $mainText;

        if ($this->category == "Оприділись"){
            $this->imageLink = "../media/post-images/choose.png";
        }
        elseif($this->category == "Бармен пояснить"){
            $this->imageLink = "../media/post-images/barman-explain.png";
        }
        else{
            $this->imageLink = "../media/post-images/unknown.png";
        }
    }
}