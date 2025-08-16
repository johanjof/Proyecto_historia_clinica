# Ophthalmological Clinical History System

## 🏥 Description
Web system for managing ophthalmological clinical histories developed in PHP with MySQL. Allows registration and tracking of patients, medical records, and clinical data specialized in optometry.

## 🌟 Features

- 👥 **Patient Management**: Complete registration with personal and socioeconomic data
- 📋 **Digital Clinical History**: Specialized ophthalmological records
- 👨‍⚕️ **Multi-user System**: Role system (Administrator, Optometrist, Assistant)
- 🔍 **Ophthalmological Measurements**: Recording sphere, cylinder, axis for both eyes
- 📊 **Diagnoses**: Tracking pathologies and medical recommendations
- 🏠 **Socioeconomic Data**: Integration with strata and hobbies information

## 🚀 Local Setup

### 1. Clone the repository
```bash
git clone https://github.com/johanjof/Proyecto_historia_clinica.git
cd Proyecto_historia_clinica
```

### 2. Configure environment variables
```bash
# Copy configuration template
cp .env.example .env

# Edit with your real credentials
nano .env
```

### 3. Database setup
```bash
# Import structure
mysql -u your_user -p your_database < schema.sql

# Optional: Import sample data for development
mysql -u your_user -p your_database < sample-data.sql
```

### 4. Web server configuration
- Ensure it points to the project root folder
- PHP 7.4+ required
- Extensions: mysqli, pdo_mysql

## 📡 Production Deployment

### Railway (Recommended)
1. Connect your GitHub repository
2. Configure environment variables in dashboard:
   ```
   DB_HOST=your-host
   DB_USER=your-user
   DB_PASS=your-password
   DB_NAME=your-database
   APP_ENV=production
   ```
3. Automatic deployment

### Heroku
```bash
# Install Heroku CLI and configure
heroku create your-app-name
heroku addons:create cleardb:ignite

# Configure variables
heroku config:set APP_ENV=production
heroku config:set DB_HOST=$(heroku config:get CLEARDB_DATABASE_URL | cut -d'@' -f2 | cut -d'/' -f1)
# ... configure other variables

git push heroku main
```

### Shared Hosting (cPanel/DirectAdmin)
1. Upload files via FTP
2. Create database from panel
3. Create `.env` file with credentials
4. Import `schema.sql` from phpMyAdmin

## 🔧 Environment Variables

| Variable | Description | Example |
|----------|-------------|---------|
| `DB_HOST` | Database Server | `localhost` |
| `DB_USER` | Database User | `db_user` |
| `DB_PASS` | Database Password | `secure_password` |
| `DB_NAME` | Database Name | `clinical_history` |
| `DB_PORT` | Database Port | `3306` |
| `APP_ENV` | Environment | `production` |

## 🗃️ Database Structure

- **usuarios**: System user management
- **paciente**: Patient information
- **historias**: Ophthalmological clinical histories
- **generos**: Gender catalog
- **estratos**: Socioeconomic strata catalog
- **hobbies**: Hobbies catalog
- **paciente_hobbies**: Patient-hobbies relationship
- **roles**: User roles (admin, optometrist, etc.)

## 🔐 Security

- ✅ Credentials in environment variables
- ✅ Sensitive files excluded from repository
- ✅ PDO configuration with prepared statements
- ✅ Environment variable validation
- 🔄 TODO: Password hashing (currently plain text)
- 🔄 TODO: Input sanitization
- 🔄 TODO: Secure session authentication

## 🚧 Development

### Test Users (with sample-data.sql)
- **Admin**: 12345678 / password
- **Optometrist**: 87654321 / password  
- **Assistant**: 11223344 / password

*Note: Passwords are hashed in the database*

### File Structure
```
project/
├── .env                    # Credentials (NOT in GitHub)
├── .env.example           # Configuration template
├── lib/conf/conf.php      # Secure DB configuration
├── schema.sql             # Database structure only
├── sample-data.sql        # Test data
└── ...                    # Rest of the code
```

## 🎓 Academic Context

This project was developed as part of the **SENA (National Learning Service)** training program in software development.

## 👥 Contributors

**Development Team:**
- **Johan Ortiz** - [GitHub](https://github.com/johanjof) - *Lead Developer*
- **Juan Medina** - *Frontend Developer*
- **Hector Escobar** - *Backend Developer*
- **David Steven** - *Database Specialist*

*If you are a collaborator on this project and your name doesn't appear here, please open an issue to be added.*

## 📞 Support

For configuration questions:
- Review logs in `error_log`
- Verify environment variables
- Confirm database permissions

## 📝 License

Academic project developed for **SENA**. 

*This project has educational purposes and was developed collaboratively as part of the technical training program.*
