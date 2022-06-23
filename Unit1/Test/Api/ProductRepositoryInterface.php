<?php


namespace Unit1\Test\Api;


interface ProductRepositoryInterface
{

    public function save(\Magento\Catalog\Api\Data\ProductInterface $product, $saveOptions = false);


    public function get($sku, $editMode = false, $storeId = null, $forceReload = false);

    public function getById($productId, $editMode = false, $storeId = null, $forceReload = false);


    public function delete(\Magento\Catalog\Api\Data\ProductInterface $product);

    public function deleteById($sku);


    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria);
}
