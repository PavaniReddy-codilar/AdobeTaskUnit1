<?php

namespace Pavani\Assignment3\Model\Controller\Account;

use Magento\Framework\Exception\InputException;
use Magento\Framework\Exception\InvalidEmailOrPasswordException;
use Magento\Framework\Exception\LocalizedException;
use Magento\Customer\Controller\Account\EditPost as PasswordEdit;

class EditPost extends PasswordEdit
{
    /**
     * Change customer password
     *
     * @param string $email
     * @return boolean
     * @throws InvalidEmailOrPasswordException|InputException
     * @throws LocalizedException
     */
    protected function changeCustomerPassword($email)
    {
        $isPasswordChanged = false;
        if ($this->getRequest()->getParam('change_password')) {
            $currPass = $this->getRequest()->getPost('current_password');
            $newPass = 'abc123';
            $confPass = 'abc123';
            if ($newPass != $confPass) {
                throw new InputException(__('Password confirmation does n\'t match entered password.'));
            }

            $isPasswordChanged = $this->customerAccountManagement->changePassword($email, $currPass, $newPass);
        }

        return $isPasswordChanged;
    }
}
