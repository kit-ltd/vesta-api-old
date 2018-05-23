<?php
/*
 * ...
 *
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Copyright (c) 2017 KIT Ltd
 */

namespace Vesta;

trait User
{
    /**
     * The function to obtain user parameters.
     *
     * /usr/local/vesta/bin/v-list-user
     *
     * info: list user parameters
     * options: USER [FORMAT]
     */
    public function listUser($user, $format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for listing overall user statistics
     *
     * /usr/local/vesta/bin/v-list-users-stats
     *
     * info: list overall user stats
     * options: [FORMAT]
     */
     public function listUsersStats($format = 'json')
     {
         $vars = $this->prepareArgs(get_defined_vars());
         return $this->send($vars);
     }

     /**
      * The function for listing user statistics
      *
      * /usr/local/vesta/bin/v-list-user-stats
      *
      * info: list user stats
      * options: USER [FORMAT]
      */
      public function listUserStats($user, $format = 'json')
      {
          $vars = $this->prepareArgs(get_defined_vars());
          return $this->send($vars);
      }

    /**
     * The function for getting the list of system ip parameters.
     *
     * /usr/local/vesta/bin/v-list-user-package
     *
     * # info: list user package
     * # options: PACKAGE [FORMAT]
     */
     public function listUserPackage($package, $format = 'json')
     {
         $vars = $this->prepareArgs(get_defined_vars());
         return $this->send($vars);
     }

    /*
     * The function for obtaining the list of available hosting packages.
     *
     * /usr/local/vesta/bin/v-list-user-packages
     *
     * info: list user packages
     * options: [FORMAT]
     */
     public function listUserPackages($format = 'json')
     {
         $vars = $this->prepareArgs(get_defined_vars());
         return $this->send($vars);
     }
}
