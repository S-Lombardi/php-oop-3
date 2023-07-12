<?php
    //Recupero i file che contengono le classi
    require_once __DIR__."/Models/SistemaComunicazione.php";
    require_once __DIR__."/Models/Email.php";
    require_once __DIR__."/Models/Allegato.php";
    require_once __DIR__."/Models/Sms.php";
    require_once __DIR__."/Models/Notifica.php";


    //Istanze della classe Sistemi Comunicazione
    $email_1 = new Email('Invito alla riunione', 'Ciao tutti, vi scrivo per invitarvi alla riunione di domani alle ore 10 presso la sala conferenze. Ci saranno importanti aggiornamenti sul progetto in corso. A domani!', 'Mario Rossi', 'Tutti i dipendenti', true, false);
    $allegato_1 = new Allegato ( 'Riunione','1Mb','img_grafico.jpg');
    $email_1 -> setAllegato($allegato_1);

    $email_2 = new Email('Richiesta di informazioni', 'Buongiorno, avrei bisogno di alcune informazioni riguardo al prodotto X. Potreste gentilmente fornirmi maggiori dettagli? Grazie mille!', 'Paolo Bianchi', 'Servizio clienti', false, false);
    $allegato_2 = new Allegato ( 'Prodotto','200Kb','img_prodotto_x.jpg');
    $email_2 -> setAllegato($allegato_2);


    $sms_1 = new Sms('Invito al compleanno', 'Ciao!Ricordati di venire alla mia festa, ci vediamo domani!', 'Ginetta', 'Amici', true, ' Notifica lettura','ok');
    $sms_2 = new Sms('Gita a Siena', 'Visitiamo Siena questo sabato?', 'Maria', 'Paola', true, ' Notifica lettura','ok');
   
    $notifica_1 = new Notifica('Snapchat',' nuovo messaggio da una chat','Mittente','Destinatario',true,false, 'icona', 'visibile');
    $notifica_2 = new Notifica('Snapchat',' nuovo messaggio da una chat','Mittente','Destinatario',true,false, 'icona', 'visibile');
    
  
    //array per mostrare a schermo i dati con un ciclo
    $email = [
        $email_1,
        $email_2,
    ];

    $sms =[
        $sms_1,
        $sms_2,
    ];

    $notifica = [
        $notifica_1,
        $notifica_2,

    ]

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
        <div class="container p-5">
            <div class="row">
                <!-- EMAIL -->
                <?php  foreach($email as $email) {?>
                    <div class="col-4 card p-4 me-3">
                        <em class="text-center mb-3">
                            EMAIL
                        </em>
                        <!-- Info ( SistemaComunicazione) -->
                        <h4>
                             Mittente: <?php echo $email -> getMittente() ?>
                        </h4>
                        <h5>
                             Titolo email: <?php echo $email -> getTitolo() ?>
                        </h5>
                        <p>
                            Contenuto email: <?php echo $email -> getContenuto() ?>
                        </p>
                        <h5>
                            Destinatario: <?php echo $email -> getDestinatario() ?>
                        </h5>
                        <!-- Allegato  (Email)-->
                        <p>
                            Allegato: <?php echo $email -> getAllegato() -> getNome().' - '; echo $email -> getAllegato() ->getContenuto().' - '; echo $email -> getAllegato() ->getDimensione()  ?>
                        </p>
                        <!-- Invio ( SistemaComunicazione)  -->
                        <p class="">
                            <?php echo $email -> getInvio() ?>
                        </p>
                        <p class="">
                            <?php echo $email -> getInoltro() ?>
                        </p>
                        
                        <!-- Suoneria  ( SistemaComunicazione) -->
                        <div class="mt-3 text-center">
                            <i class="<?php echo SistemaComunicazione :: $suoneria ?>"></i>  
                            <!-- Colore led (Email) -->
                            <?php echo Email:: $colore_led ?>
                        </div>
                    </div>
                <?php }?>
                <!-- FINE EMAIL -->

                <!-- SMS -->
                <?php  foreach($sms as $item) {?>
                    <div class="col-4 card p-4 me-3">
                        <em class="text-center mb-3">
                            SMS
                        </em>
                        <!-- Info ( SistemaComunicazione) -->
                        <h4>
                             Mittente: <?php echo $item -> getMittente() ?>
                        </h4>
                        <h5>
                             Titolo SMS: <?php echo $item -> getTitolo() ?>
                        </h5>
                        <p>
                            Contenuto SMS: <?php echo $item -> getContenuto() ?>
                        </p>
                        <h5>
                            Destinatario: <?php echo $item -> getDestinatario() ?>
                        </h5>

                        <!-- Notifica lettura (SMS) -->
                        <p>
                           Notifica lettura : <?php echo $item -> getNotificaLettura() ?>
                        </p>
                        <!-- Accettazione Risposta (SMS) -->
                        <p>
                            Accettazione risposta: <?php echo $item -> getAccettazioneRisposta() ?>
                        </p>

                        <!-- Invio ( SistemaComunicazione) -->
                        <p class="">
                            <?php echo $item -> getInvio() ?>
                        </p>
                        <!-- Icona -->
                        <div class="mt-3 text-center">
                            <i class="<?php echo SistemaComunicazione :: $suoneria ?>"></i>  
                            <?php echo Sms:: $colore_led ?> 
                        </div>
                    </div>
                <?php }?>
                <!-- FINE SMS -->
                <!-- SMS -->
                <?php  foreach($notifica as $item) {?>
                    <div class="col-4 card p-4 me-3">
                        <em class="text-center mb-3">
                            NOTIFICHE
                        </em>
                        <!-- Info ( SistemaComunicazione) -->
                        <h4>
                             Mittente: <?php echo $item -> getMittente() ?>
                        </h4>
                        <h5>
                             Titolo notifica: <?php echo $item -> getTitolo() ?>
                        </h5>
                        <p>
                            Contenuto notifica: <?php echo $item -> getContenuto() ?>
                        </p>
                        <h5>
                            Destinatario: <?php echo $item -> getDestinatario() ?>
                        </h5>

                        <!-- Icona (Notifica) -->
                        <p>
                           Icona : <?php echo $item -> getIcona() ?>
                        </p>
                        <!-- Accettazione Risposta (SMS) -->
                        <p>
                            Notifica visibile: <?php echo $item -> getVisibile() ?>
                        </p>

                        <!-- Invio ( SistemaComunicazione) -->
                        <p class="">
                            <?php echo $item -> getInvio() ?>
                        </p>
                        <!-- Icona -->
                        <div class="mt-3 text-center">
                            <i class="<?php echo SistemaComunicazione :: $suoneria ?>"></i>  
                            <?php echo Notifica:: $colore_led ?> 
                        </div>
                    </div>
                <?php }?>
                <!-- FINE SMS -->
            </div>
        </div>
        
    </body>
</html>