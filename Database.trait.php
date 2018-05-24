<?php
/*
 * ...
 *
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Copyright (c) 2017 KIT Ltd
 */

namespace Vesta;

trait Database
{
    /**
     * The function creates the database concatenating username  and user_db.
     * Supported types of databases you can get using v-list-sys-config script.
     * If the host isn't stated and there are few hosts configured on the server,
     * then the host will be defined by one of three algorithms. "First" will choose
     * the first host in the list. "Random" will chose the host by a chance.
     * "Weight" will distribute new database through hosts evenly. Algorithm and
     * types of supported databases is designated in the main configuration file.
     *
     * /usr/local/vesta/bin/v-add-database
     *
     * info: add database
     * options: USER DATABASE DBUSER DBPASS [TYPE] [HOST] [CHARSET]
     */
    public function addDatabase($user, $database, $dbuser, $dbpass, $type = '', $host = '', $charset = '')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for obtaining of all database's parameters.
     *
     * /usr/local/vesta/bin/v-list-database
     *
     * info: list database
     * options: USER DATABASE [FORMAT]
     */
    public function listDatabase($user, $database, $format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for obtaining the list of all user's databases.
     *
     * /usr/local/vesta/bin/v-list-databases
     *
     * info: listing databases
     * options: USER [FORMAT]
     */
    public function listDatabase($user, $format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for suspending a certain user database.
     *
     * /usr/local/vesta/bin/v-suspend-database
     *
     * info: suspend database
     * options: USER DATABASE
     */
    public function suspendDatabase($user, $database)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for unsuspending database.
     *
     * /usr/local/vesta/bin/v-unsuspend-database
     *
     * info: unsuspend database
     * options: USER DATABASE
     */
    public function unsuspendDatabase($user, $database)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for suspending of all databases of a single user.
     *
     * /usr/local/vesta/bin/v-suspend-databases
     *
     * info: suspend databases
     * options: USER
     */
    public function suspendDatabases($user)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for unsuspending all user's databases.
     *
     * /usr/local/vesta/bin/v-unsuspend-databases
     *
     * info: unsuspend databases
     * options: USER
     */
    public function unsuspendDatabases($user)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for deleting the database. If database user have access to
     * another database, he will not be deleted.
     *
     * /usr/local/vesta/bin/v-delete-database
     *
     * info: delete database
     * options: USER DATABASE
     */
    public function deleteDatabase($user, $database)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function deletes all user databases.
     *
     * /usr/local/vesta/bin/v-delete-databases
     *
     * info: delete user databases
     * options: USER
     */
    public function deleteDatabases($user)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for rebuilding of all databases of a single user.
     *
     * /usr/local/vesta/bin/v-rebuild-databases
     *
     * info: rebuild databases
     * options: USER
     */
    public function rebuildDatabases($user)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }
}
