## Test Project
Test project with laravel passport
## Installation
```
1. composer require laravel/passport
2. php artisan migrate
3. php artisan passport:install
4. php artisan db:seed
```
POSTMAN request header
- http://127.0.0.1:8000/api/getcompanies
- Authorization: Bearer $token
- Accept: application/json

### Testing Account after Database Seed
- Email: test@test
- Password: test
