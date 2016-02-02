<?php

//Link to the mySQL database

$closed = "";

$usernameDatabase = 'vebraAdmin';					//This is the username to log in to the database
$passwordDatabase = 'boltspurs';					//This is the password to login in to the database
$dbname = 'Middleton_Dev';							//This is the database name itself.
$hostName = "localhost";				//This is always localhost, though I can only say for sure that it is using a Linux Server.
$tableName = 'propertylist';			//This is the name of the table created.  For simplicity, call it the same as what I have and the you won't have any problems.
$paragraphConcatinated = "";			//I don't think I used this, but I have left it in because I haven't checked through my code completely.

$con = mysqli_connect($hostName, $usernameDatabase, $passwordDatabase ,$dbname);

/*


/*}
catch (PDOException $e)
{
$output = 'Unable to connect to the database server. ' . $e->getMessage();
include 'error.html.php';
echo $output;
exit();
}*/


					/*
					Please note, the script that looks for these is currently looking for two directories back.  This can be seen by the

					include('../../giveMeAccess/login.php');

					statement.  I strongly advise you put this file in the root of your domain, in a non public area.  This is why the passwords are picked up in variables rather than just being typed directly in.  This eliminates the risk of someone finding out what the passwords are.  However the script that looks for it, can see it as it sits on the same server.  I hope this makes sense, if it doesn't give me a ring and I'll try and explain a little better.

					If I remember rightly, you must create the database and table before hand.  You don't need to populate the table, but it needs to be there for the code to work.  If you have trouble setting up the tables, let me know.

					Something else to note.  I have been looking at the listOfPropertiesXML.php file and I can see the property call, however I can't find the detailed property call.  It's late so I haven't really looked into it in detail.  Try running the script once the database and table are created and see if it flags up any errors, if it does.  Let me know.  I think It's just the one file for the script, but I may be wrong.  I may have had another file to initially run first.  It has been a while since I ran any files, so it's a little out of memory.  Like I say, give me a shout if you get lost.


					I have provided a picture in the email to show the tables needed in the database.

					I can't remember, but i think the propertylist table needs to be created completely before the import will work.

					So it requires the following:

					3 Columns in total.

					ID = Which is an INT(11) I believe this is also a primary key
					prop_id = Which is a varchar(11)
					url = which is a varchar(200)

					All other information inside that particular column is the default...eg Null = No etc.

					I hope this helps.  Let me know how you get on.
					*/
?>