<?php
class Book {
// TODO: Add properties as Private
  private $title;
  private $availableCopies;

  public function __construct($title, $availableCopies) {
      // TODO: Initialize properties
      $this->title = $title;
      $this->availableCopies = $availableCopies;
  }

  // TODO: Add getTitle method
  public function getTitle(){
    return $this->title;
  }




  // TODO: Add getAvailableCopies method
  public function getAvailableCopies(){
    return "Available Copies of '$this->title': $this->availableCopies";
  }



  // TODO: Add borrowBook method
  public function borrowBook(){   
    if($this->availableCopies > 0 ){
      return $this->availableCopies--;
    } else {
      return $this->title . ' is not available.';
    }
  }



  // TODO: Add returnBook method

  public function returnBook(){
    return $this->availableCopies++;
  }

}



 
class Member {
// TODO: Add properties as Private
  private $name;


  public function __construct($name) {
      // TODO: Initialize properties
      $this->name = $name;
  }


  // TODO: Add getName method
  public function getName(){
    return $this->name;
  }

  // TODO: Add borrowBook method
  public function borrowBook($book){
    if($book->borrowBook()){
      return $this->name . ' borrowed ' . $book->getTitle() . ' book';
    }
    else {
      return $this->name . ' could\'d not borrow ' . $book->getTitle() . ' book. It\'s not available.';
    }
  }



  // TODO: Add returnBook method
  public function returnBook($book){
    $book->returnBook();
    return "$this->name returned the book $book->getTitle.";
  }

}
// TODO: Create 2 books with the following properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// TODO: Create 2 members with the following properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// TODO: Apply Borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// TODO: Print Available Copies with their names:
echo $book1->getAvailableCopies();
echo $book2->getAvailableCopies();