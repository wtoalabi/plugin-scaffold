<?php
  /**
   * Created by Alabi Olawale
   * Date: 29/03/2021
   */
  declare(strict_types=1);
  
  namespace App\Core\Hooks;
  
  
  class Plugs
  {
    
    public static function Load() {
      static::HideNotices();
    }
    
    private static function HideNotices() {
      if (array_key_exists('page', $_GET)) {
        if ($_GET['page'] == 'plugin_page') {
          add_filter('pre_site_transient_update_core', function ($a) {
            return remove_core_updates();
          });
          add_filter('pre_site_transient_update_plugins', function ($a) {
            return remove_core_updates();
          });
          add_filter('pre_site_transient_update_themes', function ($a) {
            return remove_core_updates();
          });
        }
      }
    }
  }
  
  function remove_core_updates() {
    return null;
  }
