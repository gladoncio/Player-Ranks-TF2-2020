# Player-Ranks-TF2-2020
This plugin is out of support because it does not compile correctly in the new syntax and is full of errors, which is why I have left the repository out of support. If you would like to see a new version that is completely mine and is in development, you can see https: //github.com/gladoncio/tf2_stats_2024

This plugin has been compiled with sourcemod 1.11
It is an update of https://forums.alliedmods.net/showthread.php?p=2047117

The previous website has been changed for a responsive one based on boopstrap 4 and the datatables plugin

https://cdn.discordapp.com/attachments/507713793611137054/743345066336321586/unknown.png
# COMMANDS:



!rank or !ranks - Shows a menu with a list of current players and a top ten submenu, if you select a player it will tell you their ranking number, round point amount, and total point count.

!rankme - Displays your current standing vs other players on the server.

!top - Displays only the top twenty-five players on the server.

pr_reward - Rewards the selected target or targets the specified amount of points. BAN flag

pr_revoke - Does the opposite of the above command. BAN flag

pr_dumpinfo - Shows all connected client info, this is a debug command that you shouldn't need. BAN flag

pr_forcesave - Saves all connected client scores, this is a debug command that you shouldn't need. BAN flag

pr_forcecleanup - Forces the plugin to clean old records from the system. BAN flag

# INSTALL

Download playerranks.smx, and playerranks.phrases.txt below. Do not download playerranks.sp unless you are a developer or you want to compile the plugin yourself.

Move playerranks.smx to your sourcemod/plugins folder.

Move playerranks.phrases.txt to your sourcemod/translations folder.

Developers: This plugin requires More Colors in order to compile successfully.

Go to your sourcemod\configs\database.cfg file and add the following lines anywhere inside the "databases" key:

"playerranks"

{

"driver" "mysql" // If you planned on using SQLite, then you don't need to do any of this step. Configuration not required for SQLite.

"host" "127.0.0.1" // Leave it as is if you're running on the same server as the game server, else put in your MySQL server's IP.

"database" "playerranks" // Your database name.

"user" "root" // Put in your username between the quotes.

"pass" "" // Put in your password between the quotes.

"port" "3306" // If your port differs, fill this in.

}

Run the MySQL query below to create the database and table:


CREATE DATABASE IF NOT EXISTS playerranks;USE playerranks;CREATE TABLE IF NOT EXISTS `players` (`steamid` TEXT, `nickname` TEXT, `points` FLOAT DEFAULT 0.00, `seen` INTEGER DEFAULT 0);

# INSTALL WEBPAGE

copy the files to the main folder of your web server

Enter to basesdedatos/conexion.php and remplace to:

define('servidor', 'host');

define('nombre_bd', 'DB');

define('usuario', 'USER');

define('password', 'PASSWORD');
