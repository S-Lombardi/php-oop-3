<?php
    //Recupero i file che contengono le classi
    require_once __DIR__."/Models/SistemaComunicazione.php";
    require_once __DIR__."/Models/Email.php";

    //Istanze di S.Comunicazione
    $email = new Email( 'Titolo del testo',
                        'Contenuto testo blablabla..',
                        'Sig. Mittente', 
                        'Sig. Destinatario',
                        '',
                        '',
                        '',
                        '',
                        '',
                    );
                   



    





                    
    var_dump($email);
    var_dump(Email::$suoneria);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP 3</title>
    </head>
    <body>
        
    </body>
</html>