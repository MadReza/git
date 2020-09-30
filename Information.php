<?php
/*
 * Repository: Project, Information
 *      Need to create a repository
 *      Do not want a repository inside another repository
 *
 * Commands:
 *      git init [folder location (default to current if left blank)]
 *          Initialize our repository at the specified location
 *
 *      git status
 *          Tells about the current on goings of our repository
 *          file changed, added,....
 *
 *       git add [file-name]
 *          Stages the file to be saved(commit).
 *          * can be used as a wildcard.
 *              e.g.: *.php would grab all php files
 *                    * would grab all files
 *
 *       git rm --cached [file-name]
 *          UnStage the file from being saved(commit).
 *
 *       git commit -m "message"
 *          Create a save point with the stage files and message describing what happened.
 *          Message is not unique but says what it is going on inside this commit.
 *
 *       git log
 *          History and information about all commits.
 *
 */