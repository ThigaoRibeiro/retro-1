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
    
    /**
     * @return \PDOException
     */

    public function fail()
    {
        return $this->fail;
    }    
    
    public function message(): ?string
    {
        return $this->message;
    }  

    public function __set($name, $value)
    {
        if(empty($this->data)){
            $this->data =new \stdClass();
        }
        $this->data->$name = $value;
    }

      /**
     * @param $name
     * @return bool
     */
    public function __isset($name)
    {
        return isset($this->data->$name);
    }

    /**
     * @param $name
     * @return null
     */
    public function __get($name)
    {
        return ($this->data->$name ?? null);
    }

    protected function create()
    {

    }

     protected function read(string $select, string $params = null): ?\PDOStatement
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

         }catch(\PDOException  $exception){
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
    
    protected function safe()
    {
        
    }

    private function filter()
    {

    }

 }

