# Introduction

Le projet présenté consiste à identifier des utilisateurs au travers de tags NFC, le
contexte étant celui d'un badgeur de cantine. Nous avons développé la partie backoffice.
Cette partie comprend un WebService retournant les noms des utilisateurs identifiés via
une requête comprenant une liste de tags. La partie frontoffice étant gérée par une autre équipe.

# Choix des technologies

Pour répondre aux besoins du projet, nous avons dû déterminer rapidement vers quels outils
nous devions nous tourner. Nos critères étant la facilité de prise en main et la rapidité
des développements proposée.

### Un projet web

Notre équipe s'est naturellement tournée vers PHP. Ce choix s'explique principalement par le fait
que ce langage nous a semblé accessible (ressemblances au C). Aussi, le fait d'avoir certains
membres déjà familiers avec cette technologie nous a finalement motivés.

### Gestion de versions

Afin de mutualiser nos développements, nous avons choisi Git pour simplifier notre
travail. Cela nous a permis tout d'abord de travailler de concert sur les mêmes sources,
mais aussi de livrer continuellement l'équipe chargée de travailler sur la partie frontoffice.

### Des contraintes de temps

La principale difficulté du projet SOSI est la durée allouée à la réalisation du projet.
Nous avons opté pour un framework dans le but de gagner en temps de développement. Laravel
s'est présenté comme une solution convenable puisqu'il propose des modules nous étant pratiques
tels qu'une gestion facile des routes, un ORM très pratique (Eloquent) ainsi qu'une structure
claire.
