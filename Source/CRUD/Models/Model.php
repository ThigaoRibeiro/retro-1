<?php

namespace Source\CRUD\Models;
use Source\Database\Connect;

/**
 *  @packege Source\Models
 */

 abstract class Model
 {

    /**
     * @var object | null
     */
    protected $data;
    
    /**
     * @var \PDOException | null
     */
    protected $fail;

    /**
     * @var string|null
     */
    protected $message;

    public function data(): ?object
    {
        return $this->data;
    }    

    public function fail(): \PDOException
    {
        return $this->fail;
    }    
    
    public function message(): ?string
    {
        return $this->message;
    }  

    protected function create()
    {

    }

     protected function read(string $select, string $params = null)
     {
         try{
             $stmt = Connect::getInstance()->prepare($select);
             if($params){
                 //var_dump($params, $select);
                 parse_str($params, $params);
                 foreach($params as $key => $value){

                     $type = (is_numeric($value) ? \PDO::PARAM_INT :\PDO::PARAM_STR) ;
                     $stmt->bindValue(":{$key}", $value, $type);
                 }
             }
             $stmt->execute();
             return $stmt;

         }catch(PDOException  $exception){
             $this->fail = $exception;
             return null;
         }
     }


    protected function update()
    {
        
    }

    protected function delete()
    {
        
    }
    
    protected function safe(): ?array
    {
        
    }

    private function filter()
    {

    }

 }

