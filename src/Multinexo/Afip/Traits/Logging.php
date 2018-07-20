<?php
declare(strict_types=1);

namespace Multinexo\Afip\Traits;

trait Logging
{
    protected $log = null;

    public function setLogInstance($logInstance)
    {
        $this->log = $logInstance;
    }

    public function hasLogEnabled()
    {
        return (isset($this->configuracion->debug) && $this->configuracion->debug === true);
    }

    protected function logSoapEndpoint($endpointName, $client)
    {
        if ($this->hasLogEnabled()) {
            $this->log->debug('SOAP REQUEST HEADERS - ' . $endpointName, [$client->__getLastRequestHeaders()]);
            $this->log->debug('SOAP REQUEST - ' . $endpointName, [$client->__getLastRequestHeaders()]);
            $this->log->debug('SOAP RESPONSE HEADERS - ' . [$endpointName, $client->__getLastResponseHeaders()]);
            $this->log->debug('SOAP RESPONSE - ' . $endpointName, [$client->__getLastResponse()]);
        }
    }
}