<?php
date_default_timezone_set('UTC');
/**
 *
 */
class time extends Script
{
    protected $helpMessage = 'Returns the actual UTC time';

    public function run()
    {
        return $this->send(date(DATE_RFC822));
    }
}
