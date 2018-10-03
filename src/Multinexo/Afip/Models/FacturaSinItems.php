<?php
/**
 * This file is part of Multinexo PHP Afip WS package.
 *
 * Copyright (C) 1997-2018 Reyesoft <info@reyesoft.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 */

namespace Multinexo\Afip\Models;

use Multinexo\Afip\WSFE\Wsfe;
use Multinexo\Afip\WSFE\WsParametros as FeSinItemsParam;

class FacturaSinItems extends Wsfe
{
    public function puntosDeVenta() {
        if (!$this->getAutenticacion()) {
            throw new WsException('Error de autenticacion');
        }

        $result = (new FeSinItemsParam())->FEParamGetPtosVenta($this->client, $this->authRequest);

        return $result;
    }
}
