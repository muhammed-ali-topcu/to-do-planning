# To do planning web applicaiton

## Installation 

- clone `git clone https://github.com/muhammed-ali-topcu/to-do-planning.git`
- go to folder `cd to-do-planning`
- copy .env.example `cp .env.example .env`
- run `composer install`
- generate applicaitno key `php artisan key:generate`
- run migration and seed `php artisan migrate --seed`



## Notes

- tasks will be fetched when running seed. in addicaion you can fetch tasks using `php artisan fetch-tasks`

- provider 1 mock: http://localhost/mocks/provider-1-tasks

- provider 2 mock: http://localhost/mocks/provider-2-tasks

