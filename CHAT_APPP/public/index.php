<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chat</title>
        <link rel="stylesheet" href="/css/styles.css">
    </head>
    <body>
        
        <div class="chat-container">
            <div class="chat-header">
                <h2>Chat Room</h2>
            </div>
            <div class="chat-messages" id="chat-messages">
                <!-- Les messages apparaîtront ici -->
            <?php include '../src/db.php'; 
            
            $selectMsg = 'SELECT * FROM messages';
            $selectMsgExec = $pdo->query($selectMsg);
            $messages = $selectMsgExec->fetchAll();
            foreach ($messages as $message) { ?>
                <div class="message">
                    <span><?=$message['message']?></span>
                    <button class="delete-button"><a href="../src/delete.php?id=<?=$message['id']?>">Delete</a></button>
                </div>

            <?php } ?>

            </div>
            <div class="chat-input">
                <!-- Le formulaire pour envoyer des messages doit se trouver ci-dessous -->
                <form method="POST" action="">
                <label for="text"></label>
                <input type="text" name="text" id="text" placeholder="Your message...">
                <button type="submit">Send</button>
            </form>
            <?php 
            if($_SERVER['REQUEST_METHOD']== 'POST'){

                $message = $_POST['text'];
                $insertRequest = $pdo->prepare("INSERT INTO messages (message) VALUES (:message)");
                $insertRequest->bindValue(':message', $message,  PDO::PARAM_STR);
                $insertRequest->execute();

            }
            ?>
            </div>
        </div>
    </body>
</html>