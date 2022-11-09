<h2> M. Aby Pahrul XI-RPL </h2>
<?php
class Document {
    public $author;
    public $date;

    public function setAuthors($author){
        $this->author = $author;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getDate(){
        return $this->date;
    }
}
$doc = new Document();
$doc-> setAuthors("Author : Aby");
$doc-> setDate("Tanggal  : 02-02-2022");

echo $doc->getAuthor();
echo "<br>";
echo $doc->getDate();
echo "<br>";
echo "<hr>";

class Book extends Document {
    public $title;

    public function setTitle($title){
        $this->title = $title;
    }

    public function  setAuthors($author){
        $this->author = $author;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getAuthor(){
        return $this->author;
    }
}
$doc1 = new Book();
$doc1-> setTitle("Nama Buku : Coding itu Mudah !");

echo $doc1->getTitle();
echo "<br>";
echo $doc->getAuthor();
echo "<br>";
echo "<hr>";

class Email extends Book {
    public $subject;

    public function setSubject($subject){
        $this->subject = $subject;
    }

    public function getSubject(){
        return $this->subject;
    }

    

}

$doc2 = new Email();
$doc2-> setSubject("Isi buku : Tentang coding itu sangat amat mudah dan menyenangkan");

echo $doc2->getSubject();
echo "<br>";
echo $doc->getAuthor();
echo "<br>";
echo "<hr>";