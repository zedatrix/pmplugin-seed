<?php
G::LoadClass("plugin");

class pmPluginSeedPlugin extends PMPlugin{
  
  
  public function pmPluginSeedPlugin($sNamespace, $sFilename = null){
    $res = parent::PMPlugin($sNamespace, $sFilename);
    $this->sFriendlyName = "ProcessMaker Plugin Seed";
    $this->sDescription  = "This Plugin is a seed plugin for developing a Plugin for Processmaker";
    $this->sPluginFolder = "pmPluginSeed";
    $this->sSetupPage    = "setup";
    $this->iVersion      = 0.01;
    $this->aWorkspaces   = null;
    
    return $res;
  }

  public function setup(){
      /*
       * If you had menus, you would register them here
       */
    //$this->registerMenu("processmaker", "config/menuServerWorkbench.php");
    //$this->registerMenu('setup', 'config/menuServerWorkbench.php');
  }

  public function install(){
    $RBAC = RBAC::getSingleton() ;
    $RBAC->initRBAC();
    $roleData = array();
    $roleData["ROL_UID"] = G::GenerateUniqueId();
    $roleData["ROL_PARENT"] = "";
    $roleData["ROL_SYSTEM"] = "00000000000000000000000000000002";
    $roleData["ROL_CODE"] = "PROCESSMAKER_PMPLUGINSEED";
    $roleData["ROL_CREATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_UPDATE_DATE"] = date("Y-m-d H:i:s");
    $roleData["ROL_STATUS"] = "1";
    $RBAC->createRole($roleData);
    $RBAC->createPermision("PM_PMPLUGINSEED");
  }
  
  public function enable(){}

  public function disable(){}
  
}

$oPluginRegistry = &PMPluginRegistry::getSingleton();
$oPluginRegistry->registerPlugin("pmPluginSeed", __FILE__);