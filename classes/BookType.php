<?php 
//strictmode
declare(strict_types=1);
enum BookType :string{
    case ROMAN = "Roman";
    case SCIFI = "Science Fiction";
    case MANGA = "Manga";

    case THRILLER = "Thriller";

    case BD = "BD";

    public function readFrom():string {
        return match($this){
            self::ROMAN => "left",
            self::SCIFI => "left",
            self::MANGA => "right",
            self::THRILLER => "right",
            self::BD => "left",
        };
    }



}








?>