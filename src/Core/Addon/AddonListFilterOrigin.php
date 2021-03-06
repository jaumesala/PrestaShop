<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

namespace PrestaShop\PrestaShop\Core\Addon;

class AddonListFilterOrigin
{
    /* Bitwise operators */
    const DISK = 1;
    const ADDONS_MUST_HAVE = 2;
    const ADDONS_SERVICE = 4;
    const ADDONS_PARTNER = 8;
    const ADDONS_NATIVE = 16;
    const ADDONS_NATIVE_ALL = 32;
    const ADDONS_CUSTOMER = 64;
    const ADDONS_ALL = 126;

    const ALL = 127;
}
