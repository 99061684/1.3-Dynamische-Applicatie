# 1.3 Dynamische Applicatie
 
Je gaat een dynamische applicatie bouwen die bestaat uit 2 verschillende pagina's, waarbij de content bestaat uit de aangeleverde tabel en afbeeldingen. De vormgeving krijg je, je moet het alleen nog dynamisch maken.

 

## Functionele eisen:

 

### Algemeen

Je gebruikt de aangeleverde database/tabel structuur (zie het bijgeleverde characters.sql)
Je maakt gebruik van github om versie van je code bij te houden
Je checkt meerdere malen per dag goed omschreven commits in
 

### Pagina 1 (index) bestaat uit: 

Het totaal aantal characters moet zichtbaar zijn op de plaats van [X]. 
Een overzicht van alle characters (gesorteerd op naam) met zijn/haar naam, levenskracht, aanvalskracht en verdediging en een link naar hun detail pagina (hiervoor kun je URL parameters gebruiken)
 

### Pagina 2 (character) bestaat uit: 

De naam van karakter.
Zijn/haar avatar.
Al zijn gegevens uit de database.
De kleur die bij hem/haar in de database staat.
Een knop/link om terug te gaan naar het overzicht.
### Technische eisen:

Alle pagina's zijn valide HTML (W3Cvalidator).
Code voor karakterkaarten/detailpagina's mag je niet meer dan 1 keer hebben geschreven (je gaat dit dus dynamisch hergebruiken).
Je database connectie is veilig en je maakt gebruik van PDO!.
Als je een character in de database toevoegd moet alles blijven werken.
Onderaan alle paginas staat je naam een copyright.
Maak gebruik van includes en/of requires.
De applicatie moet blijven werken als er 1 of meerdere characters in de database word toegevoegd en als er 1 of meerdere verwijderd worden.
