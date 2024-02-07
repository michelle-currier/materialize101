# materialize101
Learn Terminal, Git, npm, and how to style a Framework with Materialize + SASS
Framework tut using the terminal, npm, github, materialize, all while implementing a design with material design components.

### This is for mac

Lets learn how to fire up the terminal and navigate around that.
Cmd + spacebar type in terminal and hit enter

#### Where do you keep your projects?
File structure - you start out at x location and you need to navigate to where you want to create your project folder.


When you launch terminal it starts you in macintosh `HD > Users > YourName` So we need to navigate to where you would like 
to put your project folder. There’s some basic terminal commands that we should discuss.

	ls shows a list of what is in the directory
	mkdir creates a new directory
	cd changes the directory so you can move around the computer
	mv is for moving a file around
	rm deletes 
	
So now we wanna move up to the Applications folder. 
Type in `cd ..` and hit enter(push enter to execute the commands) to move jump up a folder.
Type in ls it should list 
```
Applications   
Creative Cloud Files 
Desktop 
Documents 
Downloads
...
```
type `cd Downloads` to go up to the location you want to put your project. 
Type in `ls` again it should list things in your downloads folder  
Let's create the location for the project. Type `mkdir frameworkStarter`
Now if you open up your downloads folder there should be a new folder with that name.

Here is the npm page that we are gonna snag off github
https://www.npmjs.com/package/materialize-css
 
## Git initializing and cloning:
You are located in the frameworkStarter folder time to initialize it.
Type `git init`
Now clone the repo by typing `git clone https://github.com/mushel/materialize101`
There will be a ton of files in your folder now.
`cd materialize` install npm with `npm install`
