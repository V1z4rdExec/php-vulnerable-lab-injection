#  PHP Vulnerable Lab

This is an intentionally vulnerable PHP application created for learning web security.

# Vulnerabilities

- Command Injection
- The application executes system commands using user input without proper validation.
# Example payload:
127.0.0.1; whoami

## 🚀 How to run

bash 
php -S localhost:8000
