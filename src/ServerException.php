<?php

namespace Solaris;

/**
 * This exception thrown when request successfully sent and response successfully received and parsed but from
 * server received message about something is wrong.
 *
 * Class Exception
 * @package Solaris
 */
class ServerException extends \Exception
{
    /**
     * @var \Solaris\Response
     */
    private $response = null;


    public function __construct(Response $response = null, $message = '', $code = 0, \Exception $previous = null)
    {
        $exception = parent::__construct($message, $code, $previous);
        $this->response = $response;

        return $exception;
    }

    /**
     * @return \Solaris\Response
     */
    public function getResponse()
    {
        return $this->response;
    }
}