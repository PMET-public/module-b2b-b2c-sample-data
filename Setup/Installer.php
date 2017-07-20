<?php
/**
 * Copyright © 2016 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace MagentoEse\B2BB2CSampleData\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface
{

    /**
     * @var \MagentoEse\B2BB2CSampleData\Model\Customer
     */
    protected $customerSetup;


    /**
     * Installer constructor.
     * @param \MagentoEse\B2BB2CSampleData\Model\Customer $customerSetup
     */
    public function __construct(
        \MagentoEse\B2BB2CSampleData\Model\Customer $customerSetup
    ) {
        $this->customerSetup = $customerSetup;

    }

    /**
     * {@inheritdoc}
     */
    public function install()
    {
        $this->customerSetup->install(['MagentoEse_B2BB2CSampleData::fixtures/customer_profile.csv']);
       /* $this->categorySetup->install(['MagentoEse_B2BCatalogSampleData::fixtures/categories.csv']);
        $this->productSetup->install(['MagentoEse_B2BCatalogSampleData::fixtures/milwaukee_products_1.csv']);
        $this->preferredProducts->install(['MagentoEse_B2BSampleData::fixtures/preferredproducts.csv']);
        $this->productSetup->install(
            [
                'MagentoEse_B2BCatalogSampleData::fixtures/milwaukee_products_2.csv',
                'MagentoEse_B2BCatalogSampleData::fixtures/legrand_products.csv',
                'MagentoEse_B2BCatalogSampleData::fixtures/siemens_products.csv',
                'MagentoEse_B2BCatalogSampleData::fixtures/philips_products.csv'

           ]
        );*/
    }
}