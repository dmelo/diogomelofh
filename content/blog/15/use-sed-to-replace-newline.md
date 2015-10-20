/*
Title: Use sed to replace newline
Descprition: Sed processes line by line, therefore special syntax is needed to
replace newline char.
Date: 2015/10/20
*/

Sed processes line by line, therefore special syntax is needed to
replace newline char. For some darn reason, I keep forgetting this special
syntax. Here is the command to replace newline by a comma:

    sed ':a;N;$!ba;s/\n/,/g'

I've got this code from [this stackoverflow question](http://stackoverflow.com/questions/1251999/how-can-i-replace-a-newline-n-using-sed).
