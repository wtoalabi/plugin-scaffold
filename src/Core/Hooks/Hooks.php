<?php
  /**
   * Created by Alabi Olawale
   * Date: 08/07/2020
   */
  
  namespace App\Core\Hooks;
  
  use function Config\config;

  class Hooks
  {
    public static function Bootstrap() {
      Menu::Load();
      if (array_key_exists('page', $_GET)) {
        if ($_GET['page'] == config('plugin_page')) {
          Endpoints::Load();
          Scripts::Load();
          Locale::Load();
          Styles::Load();
          Plugs::Load();
        }
      }
    }
  }
