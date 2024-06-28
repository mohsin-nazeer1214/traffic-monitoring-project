# Traffic Monitoring Project

## Introduction
This project is a Laravel application designed to track user interactions through an API and display aggregated statistics on a dashboard.

## Requirements
- Laravel 8.x or newer
   MySQL
- Git for version control

## Setup Instructions

### 1. Clone the Repository
```bash
git clone https://github.com/mohsin-nazeer1214/traffic-monitoring-project.git
cd traffic-monitoring-project
### 2. Make the database in mysql use xamp server
### 3. composer update
php artisan optimize:clear
php artisan serve
first run the php artisan db:seed
### 4. test apis
i-http://127.0.0.1:8000/api/update-stage
pass the {
  "externalId": "user1",
  "stage": "visited"
} in the raw

ii-http://127.0.0.1:8000/api/track-visit/12345

##test case

for test cased first run php artisan test










