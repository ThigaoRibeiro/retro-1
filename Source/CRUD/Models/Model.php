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

     /**
      * @return object|null
      */
    public function data(){
        return $this->data;
    }    
    
    /**
     * @return \PDOException
     */

    public function fail()
    {
        return $this->fail;
    }

     /**
      * @return string|null
      */

    public function message()
    {
        return $this->message;
    }

     /**
      * @param $name
      * @param $value
      */
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

     /**
      * @param string $cliente
      * @param array $data
      * @return string
      */
    protected function create(string $cliente, array $data)
    {
        try{
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data)) ;
           /* echo "INSERT INTO {$cliente} {$columns}  VALUES ({$values})";
            */
            $stmt = Connect::getInstance()->prepare("INSERT INTO {$cliente} ({$columns})  VALUES ({$values})");
            var_dump($data, $this->filter($data));
            //exit;

            $stmt->execute($this->filter($data));
            return Connect::getInstance()->lastInsertId();
        }catch (\PDOException $exception){
            $this->fail = $exception;
        }
        var_dump($cliente, $data);

    }

     /**
      * @param string $select
      * @param string|null $params
      * @return bool|\PDOStatement|null
      */
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

         }catch(\PDOException  $exception){
             $this->fail = $exception;
             return null;
         }
     }


     protected function update(string $cliente, array $data, string $terms, string $params)
     {
         try{
             $dataSet = [];
             foreach ($data as $bind => $value){
                 $dataSet [] = "{$bind} = :{$bind}";
             }
             $dataSet = implode(", ", $dataSet);
             parse_str($params, $params);
 //            var_dump($params, $cliente, $terms, $data, $dataSet);
 //            exit;
 //
             $stmt = Connect::getInstance()->prepare("UPDATE {$cliente} SET {$dataSet} WHERE {$terms}") ;
             $stmt->execute($this->filter (array_merge($data, $params)));
             //var_dump($data);
 
             return ($stmt->rowCount() ?? 1);
 
         }catch(\PDOException  $exception){
             $this->fail = $exception; 
             return null;
         }
         var_dump($cliente, $data, $terms, $params);
     }
 
     protected function delete(string $cliente, string  $termns, string  $params)
     {
         try{
             $stmt = Connect::getInstance()->prepare("DELETE FROM {$cliente}  WHERE {$termns}") ;
             parse_str($params, $params);
             $stmt->execute($params);
             var_dump($stmt, $params);
             return ($stmt->rowCount() ?? 1);
 
         }catch(\PDOException  $exception){
             $this->fail = $exception;
             return null;
         }
         echo "DELETE FROM {$cliente}   WHERE {$termns}";
         var_dump($cliente, $termns, $params);
     }
 

     /**
      * @return array|null
      */
    protected function safe()
    {
        $safe = (array) $this->data;
        foreach (static::$safe as $unset) {
           unset($safe[$unset]);
        }
        return $safe;
    }

     /**
      * @param array $data
      * @return array|null
      */
    protected function filter(array  $data)
    {
        $filter=[];
        foreach ($data as $key => $value) {
               $filter[$key] = (is_null($value) ? null : filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS));
        }
        return $filter;
    }

 }

