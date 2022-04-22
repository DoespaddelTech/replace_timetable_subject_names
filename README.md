# replace_timetable_subject_names.php
Very simple script to replace Untis' shortnames of subjects in GPU001.TXT with long names.

This script can be used to replace all the shortnames for the schools subjects in GPU001.TXT (like "De") with long names (like "Deutsch") to make the timetable look nicer in IServ. 
Designed to be run by cron in "Auto-Upload"-folder of the group "Stundenplan", but could be run manually as well.

Change ``$to_replace`` and ``$replace_with`` according to your need. You may have to change the filepaths as well, depending on your setup.

NB: This is a quick'n'dirty approach, there is no error checking in place yet, be advised :)
