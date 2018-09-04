<?php

require_once __DIR__ . '/connection.php';
require_once __DIR__ . '/functions.php';

// testing each account by ID
$calum = '460';
$olivia = '461';
$chad = '462';
$sarah = '463';

// calling functions
$account = getAccount($chad);
$messages = getMessages($chad);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="Description" content="Think Insurance Task" />
        <title>Sample Code</title>
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <header style="background: #363636; color: white; padding: 16px;">
            <div>
                <h2 style="margin: 0; font-weight: 300;">Welcome, <strong><?php echo $account['firstName'] . ' ' . $account['lastName']; ?></strong></h2>
            </div>
        </header>
        <section>
            <div class="messages">
                <div>
                    <ol style="list-style: none; text-align: left; padding-left: 6px;">
                        <?php $x = 1; ?>
                        <?php foreach($messages as $message) { ?>
                        <li><strong><?php echo $x; ?>)</strong> <?php echo $message['messages']; ?></li>
                        <?php $x++; ?>
                        <?php } ?>
                    </ol>
                </div>
            </div>
        </section>
        <footer>
            <div>
                <div class="footer-buttons">
                    <a href="#" class="">Logout</a>
                </div>
                <div class="footer-buttons" style="margin: 0 10px;">
                    <a href="#" class="show-button">Show Messages</a>
                </div>
                <div class="footer-buttons">
                    <a href="#" class="close-button">Close Messages</a>
                </div>
            </div>
        </footer>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="script.js" type="text/javascript"></script>
    </body>
</html>