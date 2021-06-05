<?php 

class bookdb
{

  public $book_gID;
  public $book_gName;
  public $book_nID;
  public $book_name;

  function __construct($book_gID,$book_gName,$book_nID,$book_name) {

      $this->book_gID = $book_gID;
      $this->book_gName = $book_gName;
      $this->book_nID = $book_nID;
      $this->book_name = $book_name;
  }
}

?>