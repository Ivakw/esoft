#LINUX BASIC COMMANDS

## Working with file and folders

Current working directory

    $ pwd

Create direcotory

    $ mkdir <direcotry name>

Change direcotry

    $ cd <direcotry name>
    $ cd ..   //Chnage to previous direcotry
    $ cd /  //Chnage to root direcotry

List content inside the direcotry

    $ ls
    $ ll
    $ ls -al


Remove Folder 

    $ rm -rf <Location of the folder> 


Copy content 

    $ cp <start location> <destination>
    $ cp text1.txt /web/test/abc

Rename file and direcotry

    $ mv <original file name> <new file name>



#Change File Permissions

There are 3 type of file permissions 

    r - Read = 4
    w - write = 2
    x - execute = 1

File owners

    u - File owner
    g - Group owner
    o - Other owner
    a - All users


Add / remove  File permissions

    $ chmod <file owner> +/- <Permission type>
    $ chmod a+w tezt.txt
    $ chmod a-w text.txt

Add File permissions with numarical notation

    $ chmod 777 test.txt
    $ chmod 700 test.txt



# VI Editor

There are 3 mode in Vi edotor

Command mode
Input/ Insert mode
Escape Mode

##Vi Commands 

:wq - Save all changes and Exit
:q! - Exit without save
:w <file name>  - Write to deferent file
:! - Execute shell command

h - Move cursor to previous character
l - Move cursor to next character
k - Move cursor to up line
j - Move cursor to down line
x - Delete character as current curser
dd - Delete line

##Corsor commands

<Ctrl> d or D - Scrol down half screen
<Ctrl> u or U - Scrol up half screen
<Ctrl> F - One page Forward
<Ctrl> B - One page backword



# Redirections

There 3 Redirections
1 - Input -Discriptor 0 
2 - Output- Discriptor 1
3 - Error - Discriptor 2

Standard Input Redirectoin

$ cat < text.txt
$ cat 0< text.txt

Standard Output redirection
$ history 1> commands

Satndard Error redirection

$ asdklaskdasl 2> error


#Grep Filter

grep <pattern> <file name>

$ grep "npm [i-q]" command_history.txt
$ grep "npm ^[i,s,r]" command_history.txt
$ grep "npm [run]" command_history.txt


#wc filter

wc <option> <file name>

$ wc command_history.txt
$ wc -l command_history.txt
$ wc -w command_history.txt
$ wc -c command_history.txt



























