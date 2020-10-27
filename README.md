### Sérialisation / Désérialisation avec les groupes
https://api-platform.com/docs/core/serialization/#the-serialization-process
https://api-platform.com/docs/core/subresources/#using-serialization-groups

##### Group filter
https://api-platform.com/docs/core/filters/#group-filter

### Opération (itemOperation / collectionOperation)
https://api-platform.com/docs/core/operations/#operations

### Validation des données
https://api-platform.com/docs/core/validation/#validation
https://symfony.com/doc/current/validation.html

### JWT auth

Installation : 
- https://api-platform.com/docs/core/jwt/#jwt-authentication
- https://github.com/lexik/LexikJWTAuthenticationBundle/blob/master/Resources/doc/index.md#getting-started

Génération d'un mdp via commande : 
```
docker-compose exec php bin/console security:encode-password
```
Connexion pour get un token JWT
```
curl -kX POST -H "Content-Type: application/json" https://localhost:8443/authentication_token -d '{"email":"amorin@suchweb.fr","password":"test"}'
```

Utilisation du token get précédement 
```
Bearer YOUR_TOKEN_HERE
```
