<?php
/*
 * ...
 *
 * @author    Anton Popov <a.popov@kit.team>
 * @copyright Copyright (c) 2017 KIT Ltd
 */

namespace Vesta;

trait Domain
{
    /**
     * The function adds web/dns/mail domain to a server.
     *
     * /usr/local/vesta/bin/v-add-domain
     *
     * info: add web/dns/mail domain
     * options: USER DOMAIN [IP] [RESTART]
     */
    public function addDomain($user, $domain, $ip = '', $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function deletes web/dns/mail domain.
     *
     * /usr/local/vesta/bin/v-delete-domain
     *
     * info: delete web/dns/mail domain
     * options: USER DOMAIN
     */
    public function deleteDomain($user, $domain)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function to obtain web domain parameters.
     *
     * /usr/local/vesta/bin/v-list-web-domain
     *
     * info: list web domain parameters
     * options: USER DOMAIN [FORMAT]
     */
    public function listWebDomain($user, $domain, $format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function to obtain the list of all user web domains.
     *
     * /usr/local/vesta/bin/v-list-web-domains
     *
     * info: list web domains
     * options: USER [FORMAT]
     */
    public function listWebDomains($user, $format = 'json')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function is intended for obtaining a domain value by the key. This call
     * is useful for arranging composite queries. The answer is displayed only in
     * raw form; output formats aren't supported.
     *
     * /usr/local/vesta/bin/v-get-web-domain-value
     *
     * info: get web domain value
     * options: USER DOMAIN KEY
     */
    public function getWebDomainValue($user, $domain, $key)
    {
        // TODO: not used?
        //$vars = $this->prepareArgs(get_defined_vars());
        //return $this->send($vars);
    }

    /**
     * The function rebuilds web configuration files.
     *
     * /usr/local/vesta/bin/v-rebuild-web-domains
     * info: rebuild dns domains
     * options: USER [RESTART]
     */
    public function rebuildWebDomains($user, $restart = 'yes')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function for suspending the site's operation. After blocking it all
     * visitors will be redirected to a web page explaining the reason of suspend.
     * By blocking the site the content of all its directories remains untouched.
     *
     * /usr/local/vesta/bin/v-suspend-web-domain
     * info: suspend web domain
     * options: USER DOMAIN
     */
    public function suspendWebDomain($user, $domain)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function of unsuspending the domain.
     *
     * /usr/local/vesta/bin/v-unsuspend-web-domain
     *
     * info: unsuspend web domain
     * options: USER DOMAIN
     */
    public function unsuspendWebDomain($user, $domain)
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function of suspending all user's sites.
     *
     * /usr/local/vesta/bin/v-suspend-web-domains
     *
     * info: suspend web domains
     * options: USER [RESTART]
     */
    public function suspendWebDomain($user, $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }

    /**
     * The function of unsuspending all user's sites.
     *
     * /usr/local/vesta/bin/v-unsuspend-web-domains
     *
     * info: unsuspend web domains
     * options: USER [RESTART]
     */
    public function unsuspendWebDomain($user, $restart = 'no')
    {
        $vars = $this->prepareArgs(get_defined_vars());
        return $this->send($vars);
    }
}
