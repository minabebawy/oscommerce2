<?php
/**
  * osCommerce Online Merchant
  *
  * @copyright (c) 2016 osCommerce; https://www.oscommerce.com
  * @license MIT; https://www.oscommerce.com/license/mit.txt
  */

  use OSC\OM\OSCOM;

  class cfgm_payment {
    var $code = 'payment';
    var $directory;
    var $language_directory;
    var $site = 'Shop';
    var $key = 'MODULE_PAYMENT_INSTALLED';
    var $title;
    var $template_integration = false;

    function __construct() {
      $this->directory = OSCOM::getConfig('dir_root', $this->site) . 'includes/modules/payment/';
      $this->language_directory = OSCOM::getConfig('dir_root', $this->site) . 'includes/languages/';
      $this->title = OSCOM::getDef('module_cfg_module_payment_title');
    }
  }
?>
