<?php

namespace WPHook;

class UpdateBlockHook
{
  function __construct()
  {
    add_filter('automatic_updater_disabled', array($this, 'onAutomaticUpdaterDisabled'));
    add_filter('pre_site_transient_update_core', array($this, 'onPreSiteTransientUpdateCore'));
  }

  public function onAutomaticUpdaterDisabled($bool)
  {
    return true;
  }

  public function onPreSiteTransientUpdateCore($arg)
  {
    return null;
  }
}
