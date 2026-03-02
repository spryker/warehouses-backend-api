<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\WarehousesBackendApi\Processor\Mapper;

use Generated\Shared\Transfer\StockCollectionTransfer;
use Generated\Shared\Transfer\WarehouseResourceCollectionTransfer;

interface WarehouseResourceMapperInterface
{
    public function mapStockCollectionToWarehouseResourceCollection(
        StockCollectionTransfer $stockCollectionTransfer,
        WarehouseResourceCollectionTransfer $warehouseResourceCollectionTransfer
    ): WarehouseResourceCollectionTransfer;
}
