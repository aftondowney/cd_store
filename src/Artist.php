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

  function matchArtist($name, $input_artist)
  {
    return strrpos($name, $input_artist);
  }

}

?>
