<?php
/**
 * class.pmPluginSeed.php
 *  
 */

  class pmPluginSeedClass extends PMPlugin {
    function __construct() {
      set_include_path(
        PATH_PLUGINS . 'pmPluginSeed' . PATH_SEPARATOR .
        get_include_path()
      );

    }

    function setup(){}

    function getFieldsForPageSetup(){}

    function updateFieldsForPageSetup(){}

  }