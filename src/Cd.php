<?php

class CD
{
    private $artist;
    private $album;

    function __construct($artist, $album)
    {
        $this->artist = $artist;
        $this->album = $album;
    }

    function setArtist($artist)
    {
        $this->artist = $artist;
    }

    function getArtist()
    {
        return $this->artist;
    }

    function setAlbum($album)
    {
        $this->album = $album;
    }

    function getAlbum()
    {
        return $this->album;
    }

    function save()
    {
        array_push($_SESSION['cd_list'], $this);
    }

    static function getAll()
    {
        return $_SESSION['cd_list'];
    }

    static function deleteAll()
    {
        $_SESSION['cd_list'] = array();
    }

    function cdMatch($input_artist)
    {
      return $this->artist == $input_artist;
    }



}

?>
