# ESERCIZIO "laravel-migration-seeder"

Creo una tabella "**trains**" nel mio database, e relativa **Migration**.

Ogni treno dovrà avere le colonne:
- Azienda
- Stazione di partenza
- Stazione di arrivo
- Orario di partenza
- Orario di arrivo
- Codice Treno
- Numero Carrozze
- In orario
- Cancellato

Aggiungo un **seeder** per la classe *Train*.
- Per popolare la mia tabella tramite il seeder utilizzo la [Libreria Faker](https://fakerphp.github.io/).

Creo un **Model** relativo ed un **Controller** per mostrare nella homepage tutti i treni.