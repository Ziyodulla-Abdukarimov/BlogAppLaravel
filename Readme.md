1. Clone the repository and cd into
```bash
git clone https://github.com/Ziyodulla-Abdukarimov/BlogAppLaravel.git && cd BlogAppLaravel
```
2. Install dependencies using composer
```bash
composer install
```
3. Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```
4. Generate a new application key
```bash
php artisan key:generate
```
5. Install node dependencies and generate front-end assets
```bash
npm install
npm run dev
```
6. Start the local development server
```bash
php artisan serve
```
