<?php

namespace Ise\Client;

interface ClientInterface
{

    /**
     * Constructor
     *
     * @param array $options
     */
    public function __construct(array $options = []);

    /**
     * Destructor
     */
    public function __destruct();

    /**
     * Is connected
     *
     * @return boolean
     */
    public function isConnected();
    
    /**
     * Connect client
     * 
     * @throws Exception\RuntimeException
     */
    public function connect();
    
    /**
     * Disconnect client
     */
    public function disconnect();
    
    /**
     * Send payload
     *
     * @param string $payload
     * @throws Exception\RuntimeException
     * @throws Exception\InvalidArgumentException
     */
    public function send($payload);
    
    /**
     * Receive payload
     *
     * @return string
     * @throws Exception\RuntimeException
     */
    public function receive();
}
