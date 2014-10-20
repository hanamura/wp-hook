<?php

namespace WPHook;

class FileNameSanitizerHook
{
  function __construct()
  {
    add_filter('sanitize_file_name', array($this, 'onSanitizeFileName'), 10, 2);
  }

  public function onSanitizeFileName($filename, $filename_raw)
  {
    $sha1 = sha1($filename_raw);
    $info = pathinfo($filename);

    if (!isset($info['extension'])) {
      return $sha1;
    }

    $ext = $info['extension'];

    if (!preg_match('/^([a-z0-9]+)$/i', $ext, $matches)) {
      return $sha1;
    }

    $ext = strtolower($ext);

    return $sha1 . '.' . $ext;
  }
}
