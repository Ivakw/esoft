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














































