<?
declare(strict_types=1);
interface BookInterface
{
   public function getAuthor():string;
   
    public function getPageCount():int;
    
    public function read():void;

    public function getType():BookType;
}






?>