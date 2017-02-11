# symfony2-react-example-todo-list
#How to run
### Prepare BE
* Run `composer update -vvv`
* Create database name `todo-list`
* Make sure config for database is true, change on file `parameter.yml`
* Dump db from file sql schema or Run command (in folder DB) `php app/console doctrine:schema:update --force`
* Run `php app\console asset:install` and `php app\console assttic:dump`

### Prepare FE (dev environment)
* Cd `app\Resources\client`
* Run `yarn install` or `npm install`
* Run `yarn run start` or `npm run start`

### Result see in folder Output
^^Enjoy