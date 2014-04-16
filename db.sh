php app/console doctrine:database:drop --force
php app/console doctrine:database:create
php app/console doctrine:schema:create
php app/console doctrine:fixtures:load
# php app/console fos:elastica:populate
php app/console assets:install --symlink web --env=prod
php app/console assets:install --symlink web --env=dev

