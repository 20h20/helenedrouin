# Helene Drouin

Thème WP pour le site https://www.helenedrouin.fr/.

# Installation déploiement
- Générer clés ssh
- Clé privée à placer dans github > repo du projet > Settings > Secrets and Variables > New repository secret > À nommer DEPLOY_KEY_STAGING

# Preprod
- https://helenedrouin.julien-brochard.fr/
- git add . / git commit -m '' / git push origin develop
- Branche git : develop (git push origin develop)


# Prod
- https://www.helenedrouin.fr/
- Branche git : main (git push origin main)



## Grunt :

- Installer avec `npm i`
- Développer avec `grunt watch`

Si cela ne fonctionne pas : vérifier version nvm et utiliser celle compatible (ex : nvm use v14.16.1)