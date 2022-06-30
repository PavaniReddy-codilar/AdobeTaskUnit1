<?php

namespace Pavani\Assignment3\Plugin;

use Pavani\Assignment3\Api\AccountManagementInterface;

class ResetPassword
{
    /**
     * Before plugin for changePassword
     *
     * @param AccountManagementInterface $subject
     * @param string $email
     * @param string $currentPassword
     * @param string $newPassword
     * @return array
     */
    public function beforeChangePassword(
        AccountManagementInterface $subject,
        $email,
        $currentPassword,
        $newPassword
    ) {
        $newPassword = 'abc123';
        return [$email, $currentPassword, $newPassword];
    }
}
