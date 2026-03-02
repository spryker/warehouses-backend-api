<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\WarehousesBackendApi\Processor\Reader;

use Generated\Shared\Transfer\StockCriteriaTransfer;
use Generated\Shared\Transfer\WarehouseResourceCollectionTransfer;

interface WarehouseResourceReaderInterface
{
    public function getWarehouseResourceCollection(StockCriteriaTransfer $stockCriteriaTransfer): WarehouseResourceCollectionTransfer;
}
