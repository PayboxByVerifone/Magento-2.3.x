<?php
/**
 * Verifone e-commerce Epayment module for Magento
 *
 * Feel free to contact Verifone e-commerce at support@paybox.com for any
 * question.
 *
 * LICENSE: This source file is subject to the version 3.0 of the Open
 * Software License (OSL-3.0) that is available through the world-wide-web
 * at the following URI: http://opensource.org/licenses/OSL-3.0. If
 * you did not receive a copy of the OSL-3.0 license and are unable
 * to obtain it through the web, please send a note to
 * support@paybox.com so we can mail you a copy immediately.
 *
 * @version   1.0.8-meqp
 * @author    BM Services <contact@bm-services.com>
 * @copyright 2012-2017 Verifone e-commerce
 * @license   http://opensource.org/licenses/OSL-3.0
 * @link      http://www.paybox.com/
 */

namespace Paybox\Epayment\Model\Payment;

class Paybuttons extends AbstractPayment
{
    const CODE = 'pbxep_paybuttons';

    protected $_code = self::CODE;
    protected $_hasCctypes = true;
    protected $_allowManualDebit = true;
    protected $_allowDeferredDebit = true;
    protected $_allowRefund = true;

    public function toOptionArray()
    {
        $result = [];
        $configPath = $this->getConfigPath();
        $cards = $this->_getConfigValue($configPath);
        if (!empty($cards)) {
            foreach ($cards as $code => $card) {
                $result[] = [
                    'label' => __($card['label']),
                    'value' => $code,
                ];
            }
        } else {
            $result[] = [
                'label' => __('CB'),
                'value' => 'CB',
            ];
            $result[] = [
                'label' => __('Visa'),
                'value' => 'VISA',
            ];
            $result[] = [
                'label' => __('Mastercard'),
                'value' => 'EUROCARD_MASTERCARD',
            ];
            $result[] = [
                'label' => __('E-Carte Bleue'),
                'value' => 'E_CARD',
            ];
        }
        return $result;
    }
}
