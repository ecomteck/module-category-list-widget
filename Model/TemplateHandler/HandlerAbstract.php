<?php
/**
 * Copyright © MageKey. All rights reserved.
 * See LICENSE.txt for license details.
 */
namespace MageKey\CategoryListWidget\Model\TemplateHandler;

use Magento\Catalog\Model\Category;
use Magento\Catalog\Model\ResourceModel\Category\Collection as CategoryCollection;

abstract class HandlerAbstract extends \Magento\Framework\DataObject
{
    /**
     * Prepare category collection
     *
     * @param CategoryCollection $collection
     * @param \Magento\Framework\DataObject $options
     * @return void
     */
    public function prepareCollection(CategoryCollection $collection, \Magento\Framework\DataObject $options)
    {
        return;
    }

    /**
     * Retrieve category data
     *
     * @param Category $category
     * @return array
     */
    public function getCategoryData(Category $category)
    {
        return [];
    }
}
