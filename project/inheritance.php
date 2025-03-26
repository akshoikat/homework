<?php

namespace Library;

// Interface for managing objects
interface Manageable {
    public function getDetails(): string;
}

// Abstract class Person
abstract class Person {
    protected string $name;
    protected int $age;
    
    public function __construct(string $name, int $age) {
        $this->name = $name;
        $this->age = $age;
    }
    
    abstract public function getRole(): string;
}

// Trait for logging messages
trait Logger {
    public function log(string $message) {
        echo "[LOG]: " . $message . "\n";
    }
}

// Author class
class Author extends Person implements Manageable {
    use Logger;
    
    private array $books = [];
    
    public function addBook(string $bookTitle) {
        $this->books[] = $bookTitle;
        $this->log("Book '$bookTitle' added to author '{$this->name}'.");
    }
    
    public function getRole(): string {
        return "Author";
    }
    
    public function getDetails(): string {
        return "Author: $this->name, Age: $this->age, Books: " . implode(", ", $this->books);
    }
}

// Book class
class Book implements Manageable {
    private string $title;
    private Author $author;
    const GENRE = "Fiction";
    
    public function __construct(string $title, Author $author) {
        $this->title = $title;
        $this->author = $author;
        $this->author->addBook($title);
    }
    
    public function getDetails(): string {
        return "Book: $this->title, Author: {$this->author->getDetails()}, Genre: " . self::GENRE;
    }
}

// Library class
class Library {
    private static array $books = [];
    
    public static function addBook(Book $book) {
        self::$books[] = $book;
    }
    
    public static function listBooks() {
        foreach (self::$books as $book) {
            echo $book->getDetails() . "\n";
        }
    }
}

// Example Usage
$author1 = new Author("J.K. Rowling", 55);
$book1 = new Book("Harry Potter", $author1);
$book2 = new Book("Fantastic Beasts", $author1);

Library::addBook($book1);
Library::addBook($book2);

Library::listBooks();
