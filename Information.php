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
 *          Some changes from computer 1 to test.
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
 *       git checkout [name]
 *          Changes to branch if name is branch name
 *              e.g.: git checkout master
 *          Changes to that commit if name is commit ID
 *              e.g.: git checkout cbb751a16fde2ed7222909280e1b2d7e6b4aabbb
 *          Create branch and switch by having property -b
 *              e.g.: git checkout -b [branch-name]
 *
 *      git branch -v
 *          List all branches
 *          * represents current branch
 *          some changes from computer 2 to test.
 *
 *      git remote add [name] [value]
 *          Add a git server location to store our repository.
 *          e.g: git remote add origin https://github.com/User/Repo.git
 *
 *      git push -u [remote-name] [branch-name]
 *          Push commits to the remote server
 *              e.g.: git push -u origin master
 *          After push we can omit -u origin master because it is saved.
 *              e.g.: git push
 */