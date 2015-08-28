<?php
require_once 'scripts/script.php';

date_default_timezone_set('UTC');
/**
 *
 */
class time extends Script
{
    private $helpMessage = 'Returns the actual UTC time';

    public function run()
    {
        return $this->send($this->message->number, date(RFC822));
    }
}
