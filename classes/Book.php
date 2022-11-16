<?php
declare(strict_types=1);
//an implements
class Book implements BookInterface {
    public function __construct(
        public string $author,
        public int $pageCount,
        public BookType $type,
        
    ) {
    }



    public function getAuthor(): string
    {
        return $this->author;
    }

    public function setAuthor(string $author): void
    {
        $this->author = $author;
    }

    public function getPageCount(): int
    {
        return $this->pageCount;
    }

    public function setPageCount(int $pageCount): void
    {
        $this->pageCount = $pageCount;
    }


    public function read(): void
    {
        echo "Je lis le livre";
    }
public function getType(): BookType
{
    return $this->type;
}

}





?>