# Carte de cantine BackOffice API

- **[<code>GET</code> user/batch]** Récupère les informations utilisateur depuis une liste de tags NFC fournie.

## 3 exemples de retours fournis par le webservice

### Si aucune adresse n'est fournie :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch

*Résultat :*

<code>
{"valid":false,"error":{"code":1,"message":"Les donn\u00e9es envoy\u00e9es sont vides."}}
</code>
### Avec 2 adresses :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80

*Résultat :*

<code>
{"data":[{"id":"1","serial":"04:5c:8b:12:3e:27:80","prenom":"Thibaud","nom":"Dauce",
</code>
<code>
"created_at":"2014-09-04 07:34:25","updated_at":"2014-09-04 07:34:25"},
</code>
<code>
{"id":"2","serial":"04:1c:67:0a:3e:27:80","prenom":"Florian","nom":"Lepetit",
</code>
<code>
"created_at":"2014-09-04 07:34:25","updated_at":"2014-09-04 07:34:25"}],"valid":true}
</code>
### Avec une erreur :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80&data[3]=zefz

*Résultat :*

<code>
{"data":[{"id":"1","serial":"04:5c:8b:12:3e:27:80","prenom":"Thibaud","nom":"Dauce",
</code>
<code>
"created_at":"2014-09-04 07:34:25","updated_at":"2014-09-04 07:34:25"},
</code>
<code>
{"id":"2","serial":"04:1c:67:0a:3e:27:80","prenom":"Florian","nom":"Lepetit",
</code>
<code>
"created_at":"2014-09-04 07:34:25","updated_at":"2014-09-04 07:34:25"}],
</code>
<code>
"valid":false,"error":{"code":2,"message":"Toutes les donn\u00e9es n'ont pas pu \u00eatre r\u00e9cup\u00e9r\u00e9es."}}
</code>
