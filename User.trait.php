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
     * The function to obtain the list of all system users.
     * /usr/local/vesta/bin/v-list-users
     * info: list users
     * options: [FORMAT]
     */
    public function listUsers($format = 'json')
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

    /**
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

    /**
     * The function creates new user account.
     * /usr/local/vesta/bin/v-add-user
     * info: add system user
     * options: USER PASSWORD EMAIL [PACKAGE] [FNAME] [LNAME]
     */
    public function addUser($user, $password, $email, $package = null, $fname = null, $lname = null)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function rebuilds system user account.
     *
     * /usr/local/vesta/bin/v-rebuild-user
     *
     * info: rebuild system user
     * options: USER [RESTART]
     */
    public function rebuildUser($user, $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * This function deletes a certain user and all his resources such as domains,
     * databases, cron jobs, etc.
     *
     * /usr/local/vesta/bin/v-delete-user
     *
     * info: delete user
     * options: USER
     */
    public function deleteUser($user)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for obtaining certain user's parameters.
     *
     * /usr/local/vesta/bin/v-get-user-value
     *
     * info: get user value
     * options: USER KEY
     */
    public function getUserValue($user, $key)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function updates user notification.
     *
     * /usr/local/vesta/bin/v-acknowledge-user-notification
     * info: update user notification
     * options: USER NOTIFICATION
     */
    public function acknowledgeUserNotification()
    {
        // TODO: determine what the method is responsible for
    }

    /**
     * The function suspends a certain user and all his objects.
     *
     * /usr/local/vesta/bin/v-suspend-user
     *
     * info: suspend user
     * options: USER [RESTART]
     */
    public function suspendUser($user, $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function unsuspends user and all his objects.
     *
     * /usr/local/vesta/bin/v-unsuspend-user
     * info: unsuspend user
     * options: USER [RESTART]
     */
    public function unsuspendUser($user, $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }
}
