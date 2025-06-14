<a target="_blank" href="https://ninjaportal.net" target="_blank">
 <img src="https://i.ibb.co/Rpmq93Lr/Copy-of-Ninja-Tech-logo-template-1.png" alt="Ninja Portal Logo" height="140px" />   
</a>

# Ninja Portal Kickstart

A simple starter kit to quickly bootstrap your Ninja Portal project.

---

## Get Started

1. **Clone the Repository**
   ```bash
   git clone https://github.com/ninjaportal/kickstart.git my-portal
   cd my-portal
   composer install
   ```

2. **Configure Environment**
   - Copy `.env.example` to `.env` and update the following:
     ```
     APIGEE_ENDPOINT=https://apigee.googleapis.com/v1
     APIGEE_ORGANIZATION=your-org
     APIGEE_DRIVER=apigeex
     ```
     * `APIGEE_DRIVER`: Supported values are `edge` or `apigeex`.

3. **Add Google Service Account Key**
   - Place your Google service account key file at:
     ```
     storage/app/service_account_key.json
     ```
4. **Run Migrations**
   ```bash
    php artisan migrate
    ```

5. **Run Seeders**
   ```bash
    php artisan db:seed
    ```

6. **Run the Application**
   ```bash
   php artisan serve
   ```
   
7. **Access the Portal**
Open your browser and navigate to `http://localhost:8000` to access the Ninja Portal.

8. **Access Filament Admin**
Navigate to `http://localhost:8000/admin` to access the Filament admin panel.
```text
email: admin@ninja.com
password: password
```

---

Now go build like a ninja! 🥷   
For additional info, read the [Ninja Portal Documentation](https://docs.ninjaportal.net).
