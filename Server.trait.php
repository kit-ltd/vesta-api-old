<?php
/*
 * ...
 *
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Copyright (c) 2017 KIT Ltd
 */

namespace Vesta;

trait Server
{
    /**
     * The function for obtaining the list of system shells.
     *
     * /usr/local/vesta/bin/v-list-sys-shells
     *
     * info: list system shells
     * options: [FORMAT]
     */
    public function listSysShells($format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for obtaining the list of system users without
     * detailed information.
     *
     * /usr/local/vesta/bin/v-list-sys-users
     *
     * info: list system users
     * options: [FORMAT]
     */
    public function listSysUsers($format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function tells crond service to reread its configuration files.
     *
     * /usr/local/vesta/bin/v-restart-cron
     *
     * info: restart cron service
     * options: NONE
     */
    public function restartCron()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function tells BIND service to reload dns zone files.
     *
     * /usr/local/vesta/bin/v-restart-dns
     *
     * info: restart dns service
     * options: NONE
     */
    public function restartDns()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function tells ftp server to reread its configuration.
     *
     * /usr/local/vesta/bin/v-restart-ftp
     *
     * info: restart ftp service
     * options: NONE
     */
    public function restartFtp()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function tells Exim service to reload configuration files.
     *
     * /usr/local/vesta/bin/v-restart-mail
     *
     * info: restart mail service
     * options: NONE
     */
    public function restartMail()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function reloads proxy server configuration.
     *
     * /usr/local/vesta/bin/v-restart-proxy
     *
     * info: restart proxy server
     * options: NONE
     */
    public function restartProxy()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function restarts operating system.
     *
     * /usr/local/vesta/bin/v-restart-system
     *
     * info: restart operating system
     * options: restart
     */
    public function restartSystem($restart = 'yes')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function reloads web server configuration.
     *
     * /usr/local/vesta/bin/v-restart-web
     *
     * info: restart web server
     * options: NONE
     */
    public function restartWeb()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function reloads backend server configuration.
     *
     * /usr/local/vesta/bin/v-restart-web-backend
     *
     * info: restart backend server
     * options: NONE
     */
    public function restartWebBackend()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function starts system service.
     *
     * /usr/local/vesta/bin/v-start-service
     *
     * info: start service
     * options: service
     */
    public function startService($service)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function restarts system service.
     *
     * /usr/local/vesta/bin/v-restart-service
     *
     * info: restart service
     * options: service
     */
    public function restartService($service)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function stops system service.
     *
     * /usr/local/vesta/bin/v-stop-service
     *
     * info: stop service
     * options: service
     */
    public function stopService($service)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function stops  iptables
     *
     * /usr/local/vesta/bin/v-stop-firewall
     * info: stop system firewall
     * options: NONE
     */
    public function stopFirewall()
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }
}
