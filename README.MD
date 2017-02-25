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
$ grep "^npm [si]" command_history.txt
$ grep "npm [run]" command_history.txt


#wc filter

wc <option> <file name>

$ wc command_history.txt
$ wc -l command_history.txt
$ wc -w command_history.txt
$ wc -c command_history.txt

#cut filter

cut <option> <file name>

$ cut -d " " -f1 command_history.txt
$ cut -c1-100 command_history.txt


#tr filter 

$ tr "[a-z]" "[A-Z]" < command_history.txt 

#Command Pips

$ ls -al | cut -c-10


#Variables
Declare Variable 

    fName

Use Declared Variables

    $fName

##Numbers in shell

All the input variables are taking as String inorder to do the Erithmetic operations 
this string(s) need to be converted as Number. expr command can be used for this as fillows

    echo `expr $num + $num2`
or

    echo $(($num1 * $num2))


##Erithmetic operations
    
    $((expression))
    $(( n1+n2 ))
    $(( n1/n2 ))
    $(( n1-n2 ))

Examples
Add two numbers on fly using the echo command:

    echo $(( 10 + 5 ))
Add two numbers using x and y variable. Create a shell program called add.sh using a text editor:

    #!/bin/bash
    x=5
    y=10
    ans=$(( x + y ))
    echo "$x + $y = $ans"

##Order of Precedence
Operators are evaluated in order of precedence. The levels are listed in order of decreasing precedence (quoting form the bash man page).

       id++ id--
              variable post-increment and post-decrement
       ++id --id
              variable pre-increment and pre-decrement
       - +    unary minus and plus
       ! ~    logical and bitwise negation
       **     exponentiation
       * / %  multiplication, division, remainder
       + -    addition, subtraction
       << >>  left and right bitwise shifts
       <= >= < >
              comparison
       == !=  equality and inequality
       &      bitwise AND
       ^      bitwise exclusive OR
       |      bitwise OR
       &&     logical AND
       ||     logical OR
       expr?expr:expr
              conditional operator
       = *= /= %= += -= <<= >>= &= ^= |=
              assignment
       expr1 , expr2
              comma
    





#Conditional flow

##If condition

The if...else...fi statement is the next form of control statement that allows Shell to execute statements in more controlled way and making decision between two choices.

    if [ $user_name = "test" ] 
    then
        //Condition body
    fi




##Relational Operators

Bourne Shell supports following relational operators which are 
specific to numeric values. These operators would not work 
for string values unless their value is numeric.

For example, following operators would work to check a relation 
between 10 and 20 as well as in between "10" and "20" but not in 
between "ten" and "twenty".

    -eq	Checks if the value of two operands are equal or not, if yes then condition becomes true.	
    [ $a -eq $b ] is not true.
    
    -ne	Checks if the value of two operands are equal or not, if values are not equal then condition becomes true.	
    [ $a -ne $b ] is true.
    
    -gt	Checks if the value of left operand is greater than the value of right operand, if yes then condition becomes true.	
    [ $a -gt $b ] is not true.

    -lt	Checks if the value of left operand is less than the value of right operand, if yes then condition becomes true.	
    [ $a -lt $b ] is true.
    
    -ge	Checks if the value of left operand is greater than or equal to the value of right operand, if yes then condition becomes true.	
    [ $a -ge $b ] is not true.

    -le	Checks if the value of left operand is less than or equal to the value of right operand, if yes then condition becomes true.
    [ $a -le $b ] is true.


##Boolean Operators


    !	This is logical negation. This inverts a true condition 
    into false and vice versa.	
    [ ! false ] is true.
    
    -o	This is logical OR. If one of the operands is true 
    then condition would be true.	[ $a -lt 20 -o $b -gt 100 ] is true.
   
    -a	This is logical AND. If both the operands are true then 
    condition would be true otherwise it would be false.	[ $a -lt 20 -a $b -gt 100 ] is false.


##File Test Operators

There are following operators to test various properties associated with a Unix file.
Assume a variable file holds an existing file name "test" whose size is 100 bytes and has read, 
write and execute permission on −
    -b file	Checks if file is a block special file if yes then condition becomes true.
    [ -b $file ] is false.

    -c file	Checks if file is a character special file if yes then condition becomes true.	
    [ -c $file ] is false.

    -d file	Check if file is a directory if yes then condition becomes true.	
    [ -d $file ] is not true.

    -f file	Check if file is an ordinary file as opposed to a directory or special file if yes then condition becomes true.	
    [ -f $file ] is true.

    -g file	Checks if file has its set group ID (SGID) bit set if yes then condition becomes true.	
    [ -g $file ] is false.

    -k file	Checks if file has its sticky bit set if yes then condition becomes true.	
    [ -k $file ] is false.

    -p file	Checks if file is a named pipe if yes then condition becomes true.	
    [ -p $file ] is false.

    -t file	Checks if file descriptor is open and associated with a terminal if yes then condition becomes true.	
    [ -t $file ] is false.

    -u file	Checks if file has its set user id (SUID) bit set if yes then condition becomes true.	
    [ -u $file ] is false.

    -r file	Checks if file is readable if yes then condition becomes true.	
    [ -r $file ] is true.

    -w file	Check if file is writable if yes then condition becomes true.	
    [ -w $file ] is true.

    -x file	Check if file is execute if yes then condition becomes true.	
    [ -x $file ] is true.

    -s file	Check if file has size greater than 0 if yes then condition becomes true.	
    [ -s $file ] is true.

    -e file	Check if file exists. Is true even if file is a directory but exists.	
    [ -e $file ] is true.

##String Operators


    =	Checks if the value of two operands are equal or not, 
    if yes then condition becomes true.	[ $a = $b ] is not true.

    !=	Checks if the value of two operands are equal or not, 
    if values are not equal then condition becomes true.	
    [ $a != $b ] is true.

    -z	Checks if the given string operand size is zero. 
    If it is zero length then it returns true.	[ -z $a ] 
    is not true.

    -n	Checks if the given string operand size is non-zero. 
    If it is non-zero length then it returns true.	
    [ -n $a ] is not false.

    str	Check if str is not the empty string. 
    If it is empty then it returns false.	[ $a ] is not false.



## Case Esac

You can use multiple if...elif statements to perform a multiway 
branch. However, this is not always the best solution, 
especially when all of the branches depend on the value of a 
single variable.
Shell support case...esac statement which handles exactly this situation, 
and it does so more efficiently than repeated if...elif statements.

    clear
    echo " ================== case esac=================="
    echo "Enter option"
    read -p "[ a,b,c,or x ] : " opt

    case "$opt" in
        "a") echo " You have selected a "
        ;;
        "b") echo " You have selected b"
        ;;
        "c") echo " You have selected c"
        ;;
        "x") exit
        ;;
    esac



#Looping 

##While Loop

The while loop enables you to execute a set of commands repeatedly until some condition occurs. 
It is usually used when you need to manipulate the value of a variable repeatedly.

    while command
    do
        #Statement(s) to be executed if command is true
    done

##For loop
The for loop operate on lists of items. It repeats a set of 
commands for every item in a list.

    for var in word1 word2 ... wordN
    do
    #Statement(s) to be executed for every word.
    done












