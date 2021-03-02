# Mourad CHABOUR

Site pour artistes de peinture

## Environnement de développement
### Pré-requis
* PHP 8.0.2
* Composer V2
* Symfony CLI
* Docker
* Docker-Compose

Vous pouvez vérifier les pré-requis (sauf Docker et Docker-compose) avec la commande suivante (de la CLI Symfony) :

```bash
symfony check:requirments
```
### Lancer l'environnement de développement

```bash
docker-compose up -d
Symfony serve -d && symfony open:local
```