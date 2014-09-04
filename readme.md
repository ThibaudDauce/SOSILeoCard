# Carte de cantine BackOffice API

- **[<code>GET</code> user/batch]** Récupère les informations utilisateur depuis une liste de tags NFC fournie.

## 3 exemples de retours fournis par le webservice

### Si aucune adresse n'est fournie :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch

*Résultat : réponse HTTP 400 Bad Request*

```json
{

    "valid": false,
    "error": {
        "code": 1,
        "message": "Les données envoyées sont vides."
    }

}
```

### Avec 2 adresses :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80

*Résultat : réponse HTTP 200 Ok *

```json
{

    "data": [
        {
            "id": "1",
            "serial": "04:5c:8b:12:3e:27:80",
            "prenom": "Thibaud",
            "nom": "Dauce",
            "created_at": "2014-09-04 07:34:25",
            "updated_at": "2014-09-04 07:34:25"
        },
        {
            "id": "2",
            "serial": "04:1c:67:0a:3e:27:80",
            "prenom": "Florian",
            "nom": "Lepetit",
            "created_at": "2014-09-04 07:34:25",
            "updated_at": "2014-09-04 07:34:25"
        }
    ],
    "valid": true

}
```

### Avec une erreur :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch?data[1]=04:1c:67:0a:3e:27:80&data[2]=04:5c:8b:12:3e:27:80&data[3]=zefz

*Résultat : réponse HTTP 206 Partial Content*

```json
{

    "data": [
        {
            "id": "1",
            "serial": "04:5c:8b:12:3e:27:80",
            "prenom": "Thibaud",
            "nom": "Dauce",
            "created_at": "2014-09-04 07:34:25",
            "updated_at": "2014-09-04 07:34:25"
        },
        {
            "id": "2",
            "serial": "04:1c:67:0a:3e:27:80",
            "prenom": "Florian",
            "nom": "Lepetit",
            "created_at": "2014-09-04 07:34:25",
            "updated_at": "2014-09-04 07:34:25"
        }
    ],
    "valid": false,
    "error": {
        "code": 2,
        "message": "Toutes les données n'ont pas pu être récupérées."
    }

}
```
