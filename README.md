osTicket-discord
==============
An plugin for [osTicket](https://osticket.com) which posts notifications to a [Discord](https://discord.gg) channel.

Originally forked from: [https://github.com/clonemeagain/osticket-slack](https://github.com/clonemeagain/osticket-slack).

Info
------
This plugin uses CURL and was designed/tested with osTicket v1.15.1

## Requirements
- php_curl
- A Discord Server

## Install
--------
1. Clone this repo or download the zip file and place the contents into your `include/plugins` folder.
2. Now the plugin needs to be enabled & configured, so login to osTicket, select "Admin Panel" then "Manage -> Plugins" you should be seeing the list of currently installed plugins.
3. Click on `Discord Notifier` and paste your Discord Webhook URL into the box. 
4. Click `Save Changes`! (If you get an error about curl, you will need to install the Curl module for PHP). 
5. After that, go back to the list of plugins and tick the checkbox next to "Discord Notifier" and select the "Enable" button.

## Test!
Create a ticket!

Notes, Replies from Agents and System messages shouldn't appear, usernames are links to the user's page 
in osTicket, the Ticket subject is a link to the ticket, as is the ticket ID. 
