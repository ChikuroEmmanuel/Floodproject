# Disaster Watch: Flood Prediction Web Application That Uses Decision Tree Algorithm to predict Floods.

## Overview
**Disaster Watch** is a web application designed to predict floods in informal settlement areas in Kenya using machine learning algorithms. This project leverages a Decision Tree algorithm to analyze historical rainfall data and forecast potential flood occurrences and their severity.

## Tools and Dependencies
- **Node js**: https://nodejs.org/en
- **Visual Studio Code**
- **Pycharm IDE**
- **Anaconda**:https://www.anaconda.com/download
- **Machine Learning Libraries:** Pandas, scikit-learn, tensorFlow
- **Web Frameworks** Laravel, Flask API
  ## Dataset
  This project needs a reliable datasets which you can get easily by following the following link:
  (https://www.kaggle.com/datasets)

## Installation
To run this project locally, follow these steps:

1. **Clone the repository:**
    ```bash
    git clone https://github.com/username/disaster-watch.git
    cd disaster-watch
    ```

2. **Install dependencies:**
    ```bash
    composer require laravel/jetstream
    ```
3. **Install livewire Jetstream**
     ```bash
    php artisan jetstream:install livewire
    ```
4. **Run Npm module**
     ```bash
   npm run dev
    ```

5. **Run the application:**
    ```bash
    php artisan serve
    ```
# Machine Learning installation
To run the machine learning model follow the steps:
1. **Install machine learning framework**
   ```bash
     pip install tensorflow

    ```
2. **Install Flask**
    ```bash
     pip install flask

    ```
  

## Usage
1. **Data Input:** Upload historical rainfall data in CSV format.
2. **Run Prediction:** Use the web interface to initiate the flood prediction process.
3. **View Results:** Access prediction results and insights through the user dashboard.

## Methodology
This project employs the **Structured System Analysis and Design Method (SSADM)** and a **Modified Waterfall Model** for system development. Key stages include:

1. **Requirement Analysis:** Identifying and documenting system requirements.
2. **Design:** Creating system architecture and design documents.
3. **Implementation:** Developing the flood prediction model and web interface.
4. **Testing:** Ensuring system functionality and accuracy.
5. **Operation and Maintenance:** Deploying the system and performing regular maintenance.
   
## Project Directory
'''
├─ app
│  ├─ Actions
│  │  ├─ Fortify
│  │  │  ├─ CreateNewUser.php
│  │  │  ├─ PasswordValidationRules.php
│  │  │  ├─ ResetUserPassword.php
│  │  │  ├─ UpdateUserPassword.php
│  │  │  └─ UpdateUserProfileInformation.php
│  │  └─ Jetstream
│  │     └─ DeleteUser.php
│  ├─ Http
│  │  └─ Controllers
│  │     ├─ Admin
│  │     │  ├─ AdminController.php
│  │     │  ├─ DashboardController.php
│  │     │  ├─ ProfileController.php
│  │     │  ├─ SystemConfigController.php
│  │     │  └─ UserController.php
│  │     ├─ Controller.php
│  │     ├─ FeedbackController.php
│  │     ├─ FloodPredictionsController.php
│  │     ├─ HomeController.php
│  │     └─ LockController.php
│  ├─ Mail
│  │  └─ PredictionResultMail.php
│  ├─ Models
│  │  ├─ Feedback.php
│  │  ├─ Prediction.php
│  │  ├─ SystemConfig.php
│  │  └─ User.php
│  ├─ Providers
│  │  ├─ AppServiceProvider.php
│  │  ├─ FortifyServiceProvider.php
│  │  └─ JetstreamServiceProvider.php
│  └─ View
│     └─ Components
│        ├─ AppLayout.php
│        └─ GuestLayout.php
├─ artisan
├─ bootstrap
│  ├─ app.php
│  ├─ cache
│  │  ├─ .gitignore
│  │  ├─ packages.php
│  │  └─ services.php
│  └─ providers.php
├─ composer.json
├─ composer.lock
├─ config
│  ├─ app.php
│  ├─ auth.php
│  ├─ cache.php
│  ├─ database.php
│  ├─ filesystems.php
│  ├─ fortify.php
│  ├─ jetstream.php
│  ├─ logging.php
│  ├─ mail.php
│  ├─ queue.php
│  ├─ sanctum.php
│  ├─ services.php
│  └─ session.php
├─ database
│  ├─ .gitignore
│  ├─ factories
│  │  └─ UserFactory.php
│  ├─ migrations
│  │  ├─ 0001_01_01_000000_create_users_table.php
│  │  ├─ 0001_01_01_000001_create_cache_table.php
│  │  ├─ 0001_01_01_000002_create_jobs_table.php
│  │  ├─ 2024_05_28_082218_add_two_factor_columns_to_users_table.php
│  │  ├─ 2024_05_28_082312_create_personal_access_tokens_table.php
│  │  ├─ 2024_07_07_114547_create_predictions_table.php
│  │  ├─ 2024_07_07_193637_create_feedback_table.php
│  │  └─ create_system_table.php
│  └─ seeders
│     └─ DatabaseSeeder.php
├─ package-lock.json
├─ package.json
├─ phpunit.xml
├─ postcss.config.js
├─ public
'''

## Contributors
- **Chikuro Emmanuel Mbaji** (Admission Number: 151947)
- **Makau Nathan Maganga** (Admission Number: 150460)

## Acknowledgements
We extend our gratitude to Strathmore University for the opportunity to work on this project. Special thanks to:

- **Mr. Kevin Omondi**, Lecturer, for his guidance in writing the proposal.
- **Mr. Bruce L. Totona**, Supervisor, for his insights and support.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.
