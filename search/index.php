<?php
include_once $_SERVER['DOCUMENT_ROOT'] .
             '/includes/magicQuotes.inc.php';

//if (isset($_GET['add']))
//{
//	$pageTitle = 'New Joke';
//	$action = 'addform';
//	$text = '';
//	$authorid = '';
//	$id = '';
//	$button = 'Add joke';




//Check if search data was submitted
if ( isset( $_GET['searchLoc'] ) ) {
	// Include the search class
	require_once( dirname( __FILE__ ) . '/class-search.php' );

	// Instantiate a new instance of the search class
	$search = new search();

	// Store search term into a variable
	$search_term = htmlspecialchars($_GET['searchLoc'], ENT_QUOTES);

	// Send the search term to our search class and store the result
	$search_results = $search->search($search_term);
}
?>
<!---->
<!--<!DOCTYPE html>-->
<!--<html>-->
<!--	<head>-->
<!--		<title>Search</title>-->
<!--	</head>-->
<!--	<body>-->
<!--		<h1>Search</h1>-->
<!--		<div class="search-form">-->
<!--			<form action="" method="get">-->
<!--				<div class="form-field">-->
<!--					<label for="search-field">Search</label>-->
<!--					<input type="search" name="searchLoc" placeholder="Enter your search term..." results="5"-->
<!--					       value="--><?php //echo $search_term; ?><!--">-->
<!--					<input type="submit" value="Search">-->
<!--				</div>-->
<!--			</form>-->
<!--		</div>-->
<!--		--><?php //if ( $search_results ) : ?>
<!--			<div class="results-count">-->
<!--				<p>--><?php //echo $search_results['count']; ?><!-- results found</p>-->
<!--			</div>-->
<!--			<div class="results-table">-->
<!--				--><?php //foreach ( $search_results['results'] as $search_result ) : ?>
<!--					<div class="result">-->
<!--						<p>--><?php //echo $search_result->title; ?><!--</p>-->
<!--					</div>-->
<!--				--><?php //endforeach; ?>
<!--			</div>-->
<!--			<div class="search-raw">-->
<!--				<pre>--><?php //print_r($search_results); ?><!--</pre>-->
<!--			</div>-->
<!--		--><?php //endif; ?>
<!--	</body>-->
<!--</html>-->


	/*
	// Build the list of authors
	try
	{
		$result = $pdo->query('SELECT id, name FROM author');
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching list of authors.';
		include 'error.html.php';
		exit();
	}

	foreach ($result as $row)
	{
		$authors[] = array('id' => $row['id'], 'name' => $row['name']);
	}

	// Build the list of categories
	try
	{
		$result = $pdo->query('SELECT id, name FROM category');
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching list of categories.';
		include 'error.html.php';
		exit();
	}

	foreach ($result as $row)
	{
		$categories[] = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'selected' => FALSE);
	}

	include 'form.html.inc.php';
	exit();
}

if (isset($_GET['addform']))
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	if ($_POST['author'] == '')
	{
		$error = 'You must choose an author for this joke.
        Click &lsquo;back&rsquo; and try again.';
		include 'error.html.php';
		exit();
	}

	try
	{
		$sql = 'INSERT INTO joke SET
        joketext = :joketext,
        jokedate = CURDATE(),
        authorid = :authorid';
		$s = $pdo->prepare($sql);
		$s->bindValue(':joketext', $_POST['text']);
		$s->bindValue(':authorid', $_POST['author']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error adding submitted joke.';
		include 'error.html.php';
		exit();
	}

	$jokeid = $pdo->lastInsertId();

	if (isset($_POST['categories']))
	{
		try
		{
			$sql = 'INSERT INTO jokecategory SET
          jokeid = :jokeid,
          categoryid = :categoryid';
			$s = $pdo->prepare($sql);

			foreach ($_POST['categories'] as $categoryid)
			{
				$s->bindValue(':jokeid', $jokeid);
				$s->bindValue(':categoryid', $categoryid);
				$s->execute();
			}
		}
		catch (PDOException $e)
		{
			$error = 'Error inserting joke into selected categories.';
			include 'error.html.php';
			exit();
		}
	}

	header('Location: .');
	exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Edit')
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	try
	{
		$sql = 'SELECT id, joketext, authorid FROM joke WHERE id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching joke details.';
		include 'error.html.php';
		exit();
	}
	$row = $s->fetch();

	$pageTitle = 'Edit Joke';
	$action = 'editform';
	$text = $row['joketext'];
	$authorid = $row['authorid'];
	$id = $row['id'];
	$button = 'Update joke';

	// Build the list of authors
	try
	{
		$result = $pdo->query('SELECT id, name FROM author');
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching list of authors.';
		include 'error.html.php';
		exit();
	}

	foreach ($result as $row)
	{
		$authors[] = array('id' => $row['id'], 'name' => $row['name']);
	}

	// Get list of categories containing this joke
	try
	{
		$sql = 'SELECT categoryid FROM jokecategory WHERE jokeid = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $id);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching list of selected categories.';
		include 'error.html.php';
		exit();
	}

	foreach ($s as $row)
	{
		$selectedCategories[] = $row['categoryid'];
	}

	// Build the list of all categories
	try
	{
		$result = $pdo->query('SELECT id, name FROM category');
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching list of categories.';
		include 'error.html.php';
		exit();
	}

	foreach ($result as $row)
	{
		$categories[] = array(
			'id' => $row['id'],
			'name' => $row['name'],
			'selected' => in_array($row['id'], $selectedCategories));
	}

	include 'form.html.inc.php';
	exit();
}

if (isset($_GET['editform']))
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	if ($_POST['author'] == '')
	{
		$error = 'You must choose an author for this joke.
        Click &lsquo;back&rsquo; and try again.';
		include 'error.html.php';
		exit();
	}

	try
	{
		$sql = 'UPDATE joke SET
        joketext = :joketext,
        authorid = :authorid
        WHERE id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->bindValue(':joketext', $_POST['text']);
		$s->bindValue(':authorid', $_POST['author']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error updating submitted joke.';
		include 'error.html.php';
		exit();
	}

	try
	{
		$sql = 'DELETE FROM jokecategory WHERE jokeid = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error removing obsolete joke category entries.';
		include 'error.html.php';
		exit();
	}

	if (isset($_POST['categories']))
	{
		try
		{
			$sql = 'INSERT INTO jokecategory SET
          jokeid = :jokeid,
          categoryid = :categoryid';
			$s = $pdo->prepare($sql);

			foreach ($_POST['categories'] as $categoryid)
			{
				$s->bindValue(':jokeid', $_POST['id']);
				$s->bindValue(':categoryid', $categoryid);
				$s->execute();
			}
		}
		catch (PDOException $e)
		{
			$error = 'Error inserting joke into selected categories.';
			include 'error.html.php';
			exit();
		}
	}

	header('Location: .');
	exit();
}

if (isset($_POST['action']) and $_POST['action'] == 'Delete')
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	// Delete category assignments for this joke
	try
	{
		$sql = 'DELETE FROM jokecategory WHERE jokeid = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error removing joke from categories.';
		include 'error.html.php';
		exit();
	}

	// Delete the joke
	try
	{
		$sql = 'DELETE FROM joke WHERE id = :id';
		$s = $pdo->prepare($sql);
		$s->bindValue(':id', $_POST['id']);
		$s->execute();
	}
	catch (PDOException $e)
	{
		$error = 'Error deleting joke.';
		include 'error.html.php';
		exit();
	}

	header('Location: .');
	exit();
}

if (isset($_GET['action']) and $_GET['action'] == 'search')
{
	include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

	// The basic SELECT statement
	$select = 'SELECT id, joketext';
	$from   = ' FROM joke';
	$where  = ' WHERE TRUE';

	$placeholders = array();

	if ($_GET['author'] != '') // An author is selected
	{
		$where .= " AND authorid = :authorid";
		$placeholders[':authorid'] = $_GET['author'];
	}

	if ($_GET['category'] != '') // A category is selected
	{
		$from  .= ' INNER JOIN jokecategory ON id = jokeid';
		$where .= " AND categoryid = :categoryid";
		$placeholders[':categoryid'] = $_GET['category'];
	}

	if ($_GET['text'] != '') // Some search text was specified
	{
		$where .= " AND joketext LIKE :joketext";
		$placeholders[':joketext'] = '%' . $_GET['text'] . '%';
	}



	try
	{
		$sql = $select . $from . $where;
		$s = $pdo->prepare($sql);
		$s->execute($placeholders);
	}
	catch (PDOException $e)
	{
		$error = 'Error fetching jokes.';
		include 'error.html.php';
		exit();
	}


		foreach ($s as $row)
		{
			$jokes[] = array('id' => $row['id'], 'text' => $row['joketext']);
		}

		include 'jokes.html.php';
		exit();

}

// Display search form
include $_SERVER['DOCUMENT_ROOT'] . '/includes/db.inc.php';

try
{
	$result = $pdo->query('SELECT id, name FROM author');
}
catch (PDOException $e)
{
	$error = 'Error fetching authors from database!';
	include 'error.html.php';
	exit();
}

foreach ($result as $row)
{
	$authors[] = array('id' => $row['id'], 'name' => $row['name']);
}

try
{
	$result = $pdo->query('SELECT id, name FROM category');
}
catch (PDOException $e)
{
	$error = 'Error fetching categories from database!';
	include 'error.html.php';
	exit();
}

foreach ($result as $row)
{
	$categories[] = array('id' => $row['id'], 'name' => $row['name']);
}

include 'searchform.html.php';
	*/