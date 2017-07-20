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
    }
}