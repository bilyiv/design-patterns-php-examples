<?php

namespace StrategyPattern\Order;

use StrategyPattern\Product\ProductInterface;

/**
 * Interface OrderInterface
 *
 * @package StrategyPattern\Order
 * @author Vladyslav Bilyi <beliyvladislav@gmail.com>
 */
interface OrderInterface
{
    /**
     * Add the product to the order.
     *
     * @param ProductInterface $product
     */
    public function addProduct(ProductInterface $product);

    /**
     * Retrieve the order total.
     *
     * @return float
     */
    public function total(): float;
}