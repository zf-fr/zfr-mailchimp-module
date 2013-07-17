<?php
/**
 * Copyright (C) Maestrooo SAS - All Rights Reserved
 *
 * Unauthorized copying of this file, via any medium is strictly prohibited
 * Proprietary and confidential
 *
 * Written by Michaël Gallego <mic.gallego@gmail.com>
 */

namespace ZfrMailChimpModule\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ZfrMailChimp\Client\MailChimpClient;

/**
 * @author Michaël Gallego <mic.gallego@gmail.com>
 * @licence MIT
 */
class MailChimpClientFactory implements FactoryInterface
{
    /**
     * {@inheritDoc}
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        if (!isset($config['zfr_mailchimp'])) {
            throw new Exception\RuntimeException(
                'No config was found for ZfrMailChimpModule. Did you copy the `zfr_mailchimp.local.php` file to your autoload folder?'
            );
        }

        return new MailChimpClient($config['zfr_mailchimp']['key']);
    }
}
