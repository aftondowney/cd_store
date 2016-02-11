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
}

?>
