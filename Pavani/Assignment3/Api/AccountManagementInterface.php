<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Pavani\Assignment3\Api;

use Magento\Framework\Exception\InputException;

/**
 * Interface for managing customers accounts.
 * @api
 * @since 100.0.2
 */
interface AccountManagementInterface
{
    /**
     * Change customer password.
     *
     * @param string $email
     * @param string $currentPassword
     * @param string $newPassword
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function changePassword($email, $currentPassword, $newPassword);


}

