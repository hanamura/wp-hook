<?php

namespace WPHook;

class ImageQuelityHook
{
  function __construct()
  {
    add_filter('wp_editor_set_quality', array($this, 'onEditorSetQuality'));
  }

  public function onEditorSetQuality($quality)
  {
    return 100;
  }
}
