<?php
date_default_timezone_set('UTC');
/**
 *
 */
class time
{
    //This is holding our matches
    private $matches;


    function __construct($matches)
    {
        $this->matches = $matches;
    }

    public function returnType()
    {
        return 'text';
    }
    public function run()
    {

        return date(DATE_RFC822);
    }

    function __destruct()
    {

    }
}
