<?php
    //Recupero i file che contengono le classi
    require_once __DIR__."/Models/SistemaComunicazione.php";
    require_once __DIR__."/Models/Email.php";
    require_once __DIR__."/Models/Allegato.php";


    //Istanze della classe Sistemi Comunicazione
    $email_1 = new Email('Invito alla riunione', 'Ciao tutti, vi scrivo per invitarvi alla riunione di domani alle ore 10 presso la sala conferenze. Ci saranno importanti aggiornamenti sul progetto in corso. A domani!', 'Mario Rossi', 'Tutti i dipendenti', true, false);
    $allegato_1 = new Allegato ( 'Riunione','12gb','img_grafico.jpg');
    $email_1 -> setAllegato($allegato_1);

    $email_2 = new Email('Richiesta di informazioni', 'Buongiorno, avrei bisogno di alcune informazioni riguardo al prodotto X. Potreste gentilmente fornirmi maggiori dettagli? Grazie mille!', 'Paolo Bianchi', 'Servizio clienti', false, true);
    $allegato_2 = new Allegato ( 'Prodotto','12gb','img_prodotto_x.jpg');
    $email_2 -> setAllegato($allegato_2);
  
    //array per mostrare a schermo i dati con un ciclo
    $email = [
        $email_1,
        $email_2,
    ];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>PHP OOP 3</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <!-- Email -->
                <?php  foreach($email as $email) {?>
                    <div class="col-4 card p-4 me-3">
                        <h4>
                             Mittente: <?php echo $email -> getMittente() ?>
                        </h4>
                        <h5>
                             Titolo email: <?php echo $email -> getTitolo() ?>
                        </h5>
                        <p>
                            Contenuto: <?php echo $email -> getContenuto() ?>
                        </p>
                        <h5>
                            Destinatario: <?php echo $email -> getDestinatario() ?>
                        </h5>
                        <!-- Allegato -->
                        <?php echo $email -> getAllegato() -> getNome().' - '; echo $email -> getAllegato() ->getContenuto().' - '; echo $email -> getAllegato() ->getDimensione()  ?>
                        <!-- Icona -->
                        <div class="mt-3 text-center">
                            <i class="<?php echo SistemaComunicazione :: $suoneria ?>"></i>   
                        </div>
                    </div>

                <?php }?>
            </div>
        </div>
        
    </body>
</html>