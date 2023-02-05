<?php
----------------------------------------
Generate SSH Key by Git Bash
ssh-keygen -t rsa -b 4096 -C "mahbubur@wpcommerz.com"

**To remove just a few specific files from being tracked:

	git update-index --assume-unchanged path/to/file
	If ever you want to start tracking it again:
	
	git update-index --no-assume-unchanged path/to/file 


	o untrack a single file that has already been added/initialized to your repository, i.e., stop tracking the file but not delete it from your system usee: git rm --cached filename

	To untrack every file that is now in your .gitignore:
	
	First commit any outstanding code changes, and then, run this command:
	
	git rm -r --cached .
	This removes any changed files from the index(staging area), then just run:
	
	git add .
	Commit it:
	
	git commit -m ".gitignore is now working"
	To undo git rm --cached filename, usee git add filename.
	
	Make sure to commit all your important changes before running git add . Otherwise, you will lose any changes to other files.


26.Merge another branch to current branch ( Updating with another branch ):
	<=> git merge another_branch_name

** Rename last commit message:
 => git commit --amend
** delete last pushed commit:
	<=> git reset --hard HEAD^ id (from local only)
	<=> git push origin -f (from remote also)
	
**Push to other branch:
=> git push origin staging

09(a):Goinng back to working dirctory from staging directory ( last stage ):
	=> git reset
09(b):Delete last commit:
	git reset HEAD~1

	******** MULTILPE REMOTES ********

	git remote set-url origin --push --add user1@repo1
	git remote set-url origin --push --add user2@repo2
	git remote -v
	Then git push will push to user1@repo1, then push to user2@repo2.
	
	
	// COMMAND
	=> git remote show
	=> git remote remove origin
	
	=> git remote show origin
	=> git remote rename origin bitbucket
	=> git remote rename origin cpanel
	=> git config --global http.postBuffer 524288000

01. git initialize:
	<=> git init

02.Set global user for all project:
	<=> git config --global user.name "MAHBUB"
	<=> git config --global user.email "devmahbubinfo@gmail.com"
	<=> git config --global user.email "mahbubwpc@gmail.com"
    

03.Set local user for one project:
	<=> git config user.name "Mahbub"
	<=> git config user.email "devmahbubinfo@gmail.com"

04.Git cofig list (information about git):
	<=> git config --list

05.clear git bash window:
	<=> clear
	<=> shortcut : ctrl+l
	

06.checking git status (last changes):
	<=> git status

07.staging one file (git add / start tracking ):
	<=> git add file_name.extension
	<=> git add cold.txt

08.staging all file (git add / start tracking ):
	<=> git add .  

		( Adds, modifies and removes index entries/files in the current directory and its subdirectories. )
	<=> git add --all  

		( Adds, modifies and removes all index entries/files to match the entire working tree of the repository. )




09.commit git :
	<=> git commit -m "message"

10.see all commit (git log briefly):
	<=> git log

11.see all commit minimized (git log in one line):
	<=> git log --oneline

12.go back to certain stage ( from git log level ):
	<=> git checkout serial_key
	<=> git checkout b9b8fb1

13.go back to master branch (all backward changes restored):
	<=> git checkout master

14.to see the changes of a certain commit:
	<=> git show serial_key

15.see the last change ( after latest commits change ):
	<=> git diff

16. changes between two commits:
	<=> git diff previous_key latest_key

17.latest changes after stagging:
 <=> git diff --staged

18.deleting file:
	<=> git rm file_name.extension 
	<=> git rm hot.txt

19. complete delete ( remove from staging also ) :
	<=> git reset HEAD file_name.extension
	<=> git reset HEAD hot.txt

19. restore deleted file :
	<=> git restore file_name.extension
	<=> git restore hot.txt



//*************************************************************************************
//*************************************************************************************
//*************************************************************************************

…or create a new repository on the command line

echo "# coffe" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M master
git remote add origin https://github.com/devmahbub/coffe.git
git push -u origin master
                
…or push an existing repository from the command line

git remote add origin https://github.com/devmahbub/coffe.git
git branch -M master
git push -u origin master


git remote add origin https://github.com/mahbubwpc/wpcmahbub.git
git branch -M master
git push -u origin master

//******************************************************************
//******************************************************************
20.PUSH AFTER COMMIT TO GITHUB:
	<=> git push origin master



20.REMOTE DIRECTORY TO LOCAL DIRECTORY ( git clone ):
	<=> git clone repo_link
	<=> git clone https://github.com/devmahbub/coffe.git

20.REMOTE DIRECTORY TO LOCAL DIRECTORY ( git clone ) WITH NEW NAME:
	<=> git clone repo_link new_name
	<=> git clone https://github.com/devmahbub/coffe.git new_name

21. Inform local machine the change of remote repository :
21. Tracking changes of remote repo ( like reverse of git add . ):
	<=> git fetch

21. Update local machine with the change of remote repository
	<=> git pull

22.create a new branch :
	<=> git branch new_branch_name

23.see all branch
	<=> git branch

24.Switch to a branch :
	<=> git checkout branch_name

25.Create anew branch and Switch that branch :
	<=> git checkout -b new_branch_name

26.Merge another branch to current branch ( Updating with another branch ):
	<=> git merge another_branch_name

27.Delete a branch :
	<=> git branch -d branch_name

////////***********************************

	GIT STASH : TEMP DIRECTORY BEFORE COMMIT

28.Remove all changes to temp repo before commit:
	<=> git stash

29.Back to last temp repo ( stash ):
	<=> git stash pop
	<=> git stash apply

30.See all temp repo ( stash ):
	<=> git stash list

31.Back to a certain temp repo ( stash ):
	<=> git stash pop serial_key
	<=> git stash pop stash@{1}

32.Clean untracked files / changes:
	<=> git clean -f 

32.See what will happen if the command run:
	<=> command -n
	<=> git clean -f -n

//////***************************************

GIT IGNORE

33.Create git ignore file:
	touch .gitignore

34.Ignore a format in .gitignore file:
	*.foramt_name
	*.psd

34.Ignore a file in .gitignore file:
	app/local.php