<?php

namespace Ise\Client;

abstract class AbstractClient implements ClientInterface
{

    /**
     * @var boolean
     */
    protected $connected = false;

    /**
     * @var array
     */
    protected $options = [];

    /**
     * {@inheritDoc}
     */
    public function __construct(array $options = [])
    {
        $this->options = array_merge($this->options, $options);
    }

    /**
     * {@inheritDoc}
     */
    public function __destruct()
    {
        $this->disconnect();
    }

    /**
     * {@inheritDoc}
     */
    public function isConnected()
    {
        return $this->connected;
    }
}
