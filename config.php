<?php

require_once INCLUDE_DIR . 'class.plugin.php';

class DiscordPluginConfig extends PluginConfig {

    // Provide compatibility function for versions of osTicket prior to
    // translation support (v1.9.4)
    function translate() {
        if (!method_exists('Plugin', 'translate')) {
            return array(
                function ($x) {
                    return $x;
                },
                function ($x, $y, $n) {
                    return $n != 1 ? $y : $x;
                }
            );
        }
        return Plugin::translate('discord');
    }

    function pre_save($config, &$errors) {
        if ($config['discord-regex-subject-ignore'] && false === @preg_match("/{$config['discord-regex-subject-ignore']}/i", null)) {
            $errors['err'] = 'Your regex was invalid, try something like "spam", it will become: "/spam/i" when we use it.';
            return FALSE;
        }
        return TRUE;
    }

    function getOptions() {
        list ($__, $_N) = self::translate();

        return array(
            'discord'                      => new SectionBreakField(array(
                'label' => $__('Discord Notifier - By RaithSphere'),
                'hint'  => $__('Just get a webhook URL from discord and job done!')
                    )),
            'discord-webhook-url'          => new TextboxField(array(
                'label'         => $__('Webhook URL'),
                'configuration' => array(
                    'size'   => 100,
                    'length' => 200
                ),
                    )),
        );
    }

}
