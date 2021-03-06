[![Build Status](https://img.shields.io/travis/ThibaudDauce/SOSILeoCard/master.svg?style=flat)](https://travis-ci.org/ThibaudDauce/SOSILeoCard)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat)](LICENSE.md)

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

http://sosi.thibaud-dauce.fr/users/batch?data[1]=041c670a3e2780&data[2]=045c8b123e2780

*Résultat : réponse HTTP 200 Ok*

```json
{

    "data": [
        {
            "id": "1",
            "serial": "045c8b123e2780",
            "prenom": "Thibaud",
            "nom": "Dauce"
        },
        {
            "id": "2",
            "serial": "041c670a3e2780",
            "prenom": "Florian",
            "nom": "Lepetit"
        }
    ],
    "valid": true

}
```

### Avec une erreur :

*Requête :*

http://sosi.thibaud-dauce.fr/users/batch?data[1]=041c670a3e2780&data[2]=045c8b123e2780&data[3]=zefz

*Résultat : réponse HTTP 206 Partial Content*

```json
{

    "data": [
        {
            "id": "1",
            "serial": "045c8b123e2780",
            "prenom": "Thibaud",
            "nom": "Dauce"
        },
        {
            "id": "2",
            "serial": "041c670a3e2780",
            "prenom": "Florian",
            "nom": "Lepetit"
        }
    ],
    "valid": false,
    "error": {
        "code": 2,
        "message": "Toutes les données n'ont pas pu être récupérées."
    }

}
```
