# Security Policy

## Supported Versions

<<<<<<< HEAD
Use this section to tell people about which versions of your project are
currently being supported with security updates.

| Version | Supported          |
| ------- | ------------------ |
| 5.1.x   | :white_check_mark: |
| 5.0.x   | :x:                |
| 4.0.x   | :white_check_mark: |
| < 4.0   | :x:                |

## Reporting a Vulnerability

Use this section to tell people how to report a vulnerability.

Tell them where to go, how often they can expect to get an update on a
reported vulnerability, what to expect if the vulnerability is accepted or
declined, etc.
=======
We are committed to ensuring the security of the Laravel User Management System. Currently, security updates are provided for the following versions:

| Version | Supported          | PHP Version | Laravel Version |
| ------- | ------------------ | ----------- | --------------- |
| 1.0.x   | :white_check_mark: | >= 8.2      | 12.x            |
| < 1.0   | :x:                | -           | -               |

## Reporting a Vulnerability

If you discover a security vulnerability within this project, we appreciate your help in disclosing it to us responsibly.

### Where to Report

Please do **not** open a public GitHub issue for security vulnerabilities. Instead, send a detailed report to the project maintainer via email:

**Email**: `security@example.com` (Please replace with actual email)

### What to Include

To help us triage and resolve the issue quickly, please include:
1.  **Type of Issue**: (e.g., SQL Injection, XSS, Privilege Escalation, Authentication Bypass).
2.  **Full Path/URL**: The specific endpoint or file where the vulnerability exists.
3.  **Proof of Concept (PoC)**: Step-by-step instructions or a script to reproduce the issue.
4.  **Impact**: A brief description of how this vulnerability could be exploited.

### Response Timeline

-   **Acknowledgment**: Within 48 hours.
-   **Triage & Assessment**: Within 5 business days.
-   **Patch Release**: Critical issues are prioritized for immediate resolution.

## Scope

### In Scope
-   Authentication and Authorization logic (e.g., bypassing `AdminMiddleware`).
-   Data exposure (e.g., accessing other users' data via API).
-   Injection vulnerabilities (SQL, Command, etc.) despite Eloquent usage.
-   Cross-Site Scripting (XSS) in Blade templates.
-   CSRF bypasses on state-changing actions.

### Out of Scope
-   Vulnerabilities in the underlying Laravel framework or PHP (please report these to the respective projects).
-   Social engineering or physical security attacks.
-   Denial of Service (DoS) attacks.

## Security Features

This project leverages Laravel's robust security features. When auditing, please consider:
-   **Eloquent ORM**: Used for all database interactions to prevent SQL injection.
-   **CSRF Protection**: Enabled globally for web routes.
-   **Sanctum**: Used for secure API token management.
-   **Hashing**: Bcrypt is used for password storage.

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
>>>>>>> e50e0a5 (docs: security policy)
