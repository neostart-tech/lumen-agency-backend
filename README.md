# Lumen Agency Backend

API REST construite avec Laravel pour la gestion de l'agence Lumen.

## Fonctionnalités
- **Authentification** : Laravel Sanctum
- **Gestion des Mot de Passe** : Système de réinitialisation par e-mail avec templates premium.
- **Services** : CRUD complet des services de l'agence.
- **Blogs** : Système de blogging avec images.
- **Messages** : Réception et réponse aux messages de contact.

## Configuration de l'E-mail
Pour que la réinitialisation de mot de passe fonctionne, configurez votre serveur SMTP dans le fichier `.env` :

```env
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="admin@lumen-agency.com"
MAIL_FROM_NAME="${APP_NAME}"

# URL du Frontend pour les liens de réinitialisation
FRONTEND_URL="http://localhost:3000"
```

## Installation
1. `composer install`
2. `php artisan migrate`
3. `php artisan db:seed` (si disponible)
4. `php artisan serve`
