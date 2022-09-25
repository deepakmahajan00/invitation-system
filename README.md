# Invitation Request System
APIs for send/accept/decline/cancle invitation request

## Required technologies
1. PHP 8
2. Mysql
3. Docker
4. Swagger/Postman `to hit apis`

## Clone repository
git clone `https://github.com/deepakmahajan00/invitation-system.git`

## Setup local without docker-compose
1. Clone repository
2. Change DB settings at `.env`
3. Go to project directory and run `composer install`
4. Run `symfony server:start`
5. Run `php bin/console doctrine:migration:migrate`
6. Run `php bin/console doctrine:fixtures:load` and choose `YES`

## Setup docker container
1. Clone repository
2. Run `docker-compose up`

## API routes
1. GET http://127.0.0.1:8000/api/cancel-invitation
2. POST http://127.0.0.1:8000/api/send-invitation
3. POST http://127.0.0.1:8000/api/respond-invitation

### POSTMAN : API POST Send Invitation
`http://127.0.0.1:8000/api/cancel-invitation`

#### `Authorization : API Key`
####  `Key: apiKey`
#### `Value`: `test-user-1@test.com` Or any user email from user table. This the caller/sender

Body: form-data parameter
  `receiver` : `test-user-2@test.com` 
Or the email of the user you can to send invitation request

### POSTMAN : API POST Respond Invitation
`http://127.0.0.1:8000/api/respond-invitation`

#### `Authorization : API Key`
####  `Key: apiKey`
#### `Value`: `test-user-1@test.com`
Or any user email from user table. This the caller/sender

Body: form-data parameter
`receiver` : `test-user-2@test.com` Or the email of the user you can to send invitation request
`status` : `ACCEPTED` or `DECLINED`

### POSTMAN : API GET Cancel Invitation
`http://127.0.0.1:8000/api/respond-invitation`

#### `Authorization : API Key`
####  `Key: apiKey`
#### `Value`: `test-user-1@test.com`
Or any user email from user table. This the caller/sender

Body: form-data parameter
`receiver` : `test-user-2@test.com` Or the email of the user you can to send invitation request
