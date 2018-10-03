<?php
/**
 * This file is part of Multinexo PHP Afip WS package.
 *
 * Copyright (C) 1997-2018 Reyesoft <info@reyesoft.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 */

namespace Multinexo\Afip\Models;

use Multinexo\Afip\WSMTXCA\Wsmtxca;
use Multinexo\Afip\WSMTXCA\WsParametros as FeConItemsParam;

class FacturaConItems extends Wsmtxca
{
    public function consultarUnidadesDeMedida()
    {
        if (!$this->getAutenticacion()) {
            throw new WsException('Error de autenticacion');
        }

        $result = (new FeConItemsParam())->consultarUnidadesMedida($this->client, $this->authRequest);

        return $result;
    }

    public function consultarCondicionesIVA()
    {
        if (!$this->getAutenticacion()) {
            throw new WsException('Error de autenticacion');
        }

        $result = (new FeConItemsParam())->consultarCondicionesIVA($this->client, $this->authRequest);

        return $result;
    }

    public function puntosDeVenta() {
        if (!$this->getAutenticacion()) {
            throw new WsException('Error de autenticacion');
        }

        $result = (new FeConItemsParam())->consultarPuntosVentaCAE($this->client, $this->authRequest);

        return $result;
    }
}
