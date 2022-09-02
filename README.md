# This project demo how to use Algolia Search with Laravel

### Step 1: Create account in https://www.algolia.com/

Get API Key value including Application ID and Admin API Key to store in env file


### Step 2: Create account in https://www.algolia.com/

Insert values in env file

SCOUT_QUEUE = true
ALGOLIA_APP_ID = {Application_ID}
ALGOLIA_SECRET = {Admin_API_Key}


### Step 3: Run php composer and composer require algolia/algoliasearch-client-php

### Step 4: Run php aritisan migration to create User and booking table

### Step 5: Run php artisan db:seed to create seeding for User and Booking table

### Step 6: Access API (http://127.0.0.1:8000/api/v1/user-listing/) to test filter User

Example JSON

{
    "user_type" : "customer",
}
