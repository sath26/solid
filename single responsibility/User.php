<?php 

/**
 * summary
 */
class User  
{
    /**
     * summary
     */
    //type-hint to logger

    protected $logger;
    public function __construct(Logger $logger){
    	$this->logger= $logger
    }
    public function create(array $data)
    {
        try {
        	//..sasve user to databse
        } catch (DatabaseException $e) {
        	// $this->logError($e->getMessage());
        	 $this->logger->writeToFile($e->getMessage());
        }
    }

    /*public function logError($message){
    	//...write error to file
    }*/
}