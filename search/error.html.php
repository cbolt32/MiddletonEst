<!doctype html>
<html lang="en">
    <head>
        <?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/header.inc.php' ;?>

    </head>

    <body class="body" id="homePage">

        <div class="pageHead">
            <?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/pageHead.inc.php' ;?>
        </div>
        <div class="container">
            <div class="mainContent">
                <div class="row">
                    <div class="col-md-12">
                        <script type="text/javascript">
                            var timer = 1.5;
                            website = "Contact.php";
                            function delayer() {
                                window.location = website;
                            }
                            setTimeout('delayer()', '2000' * timer);
                        </script>
                        <body id="Thanks">
                            <section class="container">
                                <div class="content row" id="thanksContent">
                                    <section class="main col col-lg-12" id="thankyou">
                                        <b>Appologies, We've encoured an error, You will be redirect shortly.</b><br/>
                                        <?php echo $myError; ?>

                                </div>
                                <!--content-->
                            </section>
                            <!--container-->
                            <?php exit(); ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <!-- Row of info portals -->

            </div>
        </div>


        <footer class="footer">

            <?php include $_SERVER ['DOCUMENT_ROOT'] . '/components/php/footer.inc.php' ;?>

        </footer>



    </body>
</html>

