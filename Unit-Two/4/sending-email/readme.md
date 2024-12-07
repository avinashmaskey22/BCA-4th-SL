# **PHPMailer with Gmail SMTP for Sending Emails**

This project demonstrates how to send emails using the **PHPMailer** library and Gmail's SMTP server. Follow the steps below to set up and use this project in your PHP environment.

---

## **Setup Guide**

### **1. Download the PHPMailer Library**
- Download the PHPMailer library from the official GitHub repository: [PHPMailer Library](https://github.com/PHPMailer/PHPMailer).
- Extract the downloaded files and include them in your project directory.

### **2. Create a Google App Password**
To use Gmail's SMTP server, you need to generate a 16-digit App Password. This is different from your regular Gmail password.
- Follow Google's official guide to create an App Password: [Google App Password Guide](https://support.google.com/accounts/answer/185833?hl=en).
- Make sure:
  - **2-Step Verification** is enabled in your Google account.
  - The App Password is generated specifically for this application.

---

## **How It Works**

### **1. Form Submission:**
- Users fill out a form with their:
  - Email address
  - Subject
  - Message
- The form data is sent to the server via a `POST` request.

### **2. PHPMailer Sends the Email:**
- PHPMailer uses Gmail's SMTP server to:
  - Authenticate using the provided credentials (email and App Password).
  - Send the email securely to the recipient.

### **3. Feedback to the User:**
- After processing the request:
  - A success message is displayed if the email is sent successfully.
  - An error message is shown if something goes wrong during the email sending process.

---

## **Project Files**

### **1. `config.php`:**
- Contains Gmail credentials and email settings required for authentication and email sending.

### **2. `script.php`:**
- Includes the PHPMailer library.
- Contains the `sendMail` function to handle email sending.

### **3. `form.php`:**
- Displays the form to collect user input (email, subject, and message).
- Processes the form submission and triggers the `sendMail` function.

---

## **Testing**

### **Steps to Test the Project:**

1. Open `form.php` in your browser.
2. Fill out the form with:
   - **Recipient's Email Address:** The email address you want to send the message to.
   - **Email Subject:** The subject line for the email.
   - **Email Message:** The content of the email message.
3. Submit the form.
4. Verify the following:
   - A success or error message is displayed on the page.
   - Check the recipient's inbox to ensure the email was delivered.


