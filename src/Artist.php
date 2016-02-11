<?php

class Artist
{
  private $name;

  function __construct($name)
  {
    $this->name = $name;
  }

  function setArtist($name)
  {
    $this->name = $name;
  }

  function getArtist()
  {
    return $this->name;
  }

  function matchArtist($input_artist, $name)
  {
    strrpos($name, $input_artist);
  }

}

?>
