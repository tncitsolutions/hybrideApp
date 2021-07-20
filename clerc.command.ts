//  en cas SQLSTATE[2002] de conection refused
//ajouter le  port MySQL  à database.php:
    'unix_socket' => env('UNIX_SOCKET', '/Applications/MAMP/tmp/mysql/mysql.sock');

/*     Connecting the Laravel Project on GitHub.
Ujala Jha
Ujala Jha

Oct 14, 2018·2 min read


So today we’ll go through how to connect our github account to our project. In short we’ll learn how to use git to push our project and to push/pull changes. So firstly we need a laravel project.
STEP 1: Create a laravel project.
Restful API in Laravel
A RESTful API is an application program interface (API) that uses HTTP requests to GET, PUT, POST and DELETE data. It…
medium.com

Follow above link to see how a project is created in laravel.
STEP 2: Install Git
Git - Downloads
Various Git logos in PNG (bitmap) and EPS (vector) formats are available for use in online and print projects.
git-scm.com

Follow the above link to download git on your machine.
STEP 3: Create an account on Github.
Build software better, together
GitHub brings together the world's largest community of developers to discover, share, and build better software. From…
github.com

Make an account on the above-specified link.
STEP 4: Make a repository on Github.

making a simple repo on github
 */
/* repository after creating
STEP 5: Pushing over GitHub
So now as we have made the repository we will now push the project on git. Follow the below steps to executing it.
1. Open git bash in laravel project directory */

open git bash

// 2. In git bash enter the following command.
// We will first initialize the project.

git init

// Next Add the file to git.

git add .

// Next Commit the changes by suitable commit message.

git commit -m 'Added REST Api'

// Next add the remote origin where the project is to be pushed.

git remote add origin https://github.com:larahelp/RestApi.git

// Last but not the least, push it to github.

git push -u -f origin master

/* That its, and the repo is thus added to your git account. You can now clone the repo anywhere around the world using git. */
