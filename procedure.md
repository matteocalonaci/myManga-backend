# myMANGA-backend

In questo progetto, abbiamo sviluppato un backend per un'applicazione di gestione di manga utilizzando *Laravel* e *MySQL*. Il sistema è progettato per gestire diverse entità, tra cui manga, autori, editori, categorie, generi e ordini.

Ho utilizzato **drawSql** per progettare lo schema, prestando particolare attenzione alle relazioni tra le tabelle. Successivamente, ho creato un database su MySQL.

Ho proceduto con la creazione dei file per le migrazioni e i seeder per **MANGA**, **AUTORI**, **EDITORI**, **CATEGORIE**, **GENERI** e **ORDINI**. Implemento i controller partendo da manga e infine creo le rotte nel file `web.php`.

Dopo aver inserito i dati necessari per ciascuna entità, ho iniziato la creazione delle view di base per gestire i manga. Nella view **index**, ho creato una tabella per la gestione di tutti i manga, consentendo operazioni di creazione, modifica ed eliminazione. Ho sviluppato anche le viste per la creazione e la modifica di un manga, complete di validazioni. Infine, abbiamo realizzato una pagina di visualizzazione dettagliata per ciascun manga, anche se un po' superflua.

Ho fatto lo stesso per le altre entità. Infine, ho creato un **endpoint AP**I che consente di passare i dati al sito frontend.
