<?php

namespace WPHook;

class UpdateBlockHook
{
  function __construct()
  {
    add_filter('automatic_updater_disabled', array($this, 'onAutomaticUpdaterDisabled'));
    add_filter('pre_site_transient_update_core', array($this, 'onPreSiteTransientUpdateCore'));
    remove_action('wp_version_check', 'wp_version_check');
    remove_action('admin_init', '_maybe_update_core');
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
