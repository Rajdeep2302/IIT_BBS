# Incognito Learner: Educational Platform

![Incognito Learner Logo](incognito_learner.png)

**Incognito Learner** is a comprehensive educational platform designed to facilitate online learning for students, faculty, and administrators. It includes three main components: the **Faculty Quiz Portal** for instructors, the **Admin Panel** for system-wide management, and now a **Student Portal** for student engagement. The platform features consistent branding with the "Incognito Learner" logo, a shared header, and a footer, ensuring a cohesive user experience. Additionally, it integrates AI capabilities via the Google Gemini API for enhanced functionality.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Contributing](#contributing)
- [License](#license)

## Overview
**Incognito Learner** streamlines online education by providing tools for students, faculty, and administrators. The platform now comprises:

- **Faculty Quiz Portal**: For instructors to manage courses, assignments, quizzes, and student performance.
- **Admin Panel**: For administrators to oversee users, courses, announcements, and reports.
- **Student Portal**: For students to participate in quizzes, track their progress, and provide feedback.
- **AI Integration**: A PHP script integrates with the Google Gemini API for AI-driven features (e.g., generating responses).

The platform is branded under "Incognito Learner," featuring a logo with a stylized face (hat, glasses, mustache) and the tagline "During this era of online learning, Incognito Learning helps you achieve your goals." A shared header and footer provide consistent navigation and branding.

## Features
### Shared Components
- **Branding**: "Incognito Learner" logo and tagline displayed in the header and footer.
- **Header**: Navigation links (Home, Course, Management, Report, Notice) and a Login/SignUp button.
- **Footer**: Includes the logo, description, navigation links (About, Useful Links), a newsletter subscription form, and copyright information.

### Faculty Quiz Portal
- **Course Management**: Add, edit, and delete courses with descriptions.
- **Assignment Management**: Create and list assignments with deadlines, stored in local storage.
- **Quiz Management**: Create, edit, and take quizzes with multiple-choice questions, stored locally.
- **Student Tracking**: View detailed student reports (performance, course progress, quiz/exam results, activity logs).
- **User Authentication**: Simulated sign-up, login, and password reset functionalities.
- **Notifications**: Send messages to students from the dashboard.

### Admin Panel
- **Dashboard**: Overview of system stats (users, courses, instructors, support requests) and instructor-course details.
- **User Management**: View and remove users (static example provided).
- **Course Management**: Add courses with images, instructors, prices, and start dates; delete courses dynamically.
- **Announcements**: Create and delete announcements with timestamps, stored in local storage.
- **Reports**: View student performance, mirroring the Faculty Quiz Portal’s reporting feature.
- **Profile**: Display user details (name, email, phone) with a logout option.

### Student Portal
- **Quiz Participation (`participate-quiz.html`)**: Students can answer multiple-choice questions and submit quizzes, with validation to ensure all questions are answered.
- **Student Dashboard (`student-dashboard.html`)**: 
  - **My Courses**: Displays course progress (e.g., Physics: 40%, English: 76%) with progress bars.
  - **Statistics**: Shows time spent learning (last week) with a bar chart and overall progress with a circular progress indicator.
  - **Feedback**: Allows students to submit feedback via a text area.

### AI Integration
- **Google Gemini API (`gemini-api.php`)**: A PHP script to interact with the Google Gemini API, enabling AI-driven features like generating text responses based on user input.

## Technologies Used
- **HTML5**: Page structure.
- **Tailwind CSS**: Styling via CDN (`https://cdn.tailwindcss.com`) and a local configuration (`tailwind.config.js`).
- **JavaScript**: Interactivity, form handling, and local storage management.
- **Local Storage**: Simulated backend for storing quizzes, assignments, courses, and announcements.
- **APIs**:
  - WorldTimeAPI (in `announcements.html`) for dynamic timestamps.
  - Google Gemini API (via `gemini-api.php`) for AI-driven text generation.
- **Fonts**: Google Fonts ("Vast Shadow" for header, "Caveat" for footer).
- **File Upload**: Client-side image preview for course images.
- **PHP**: Backend script for Google Gemini API integration.
- **SVG**: Used for circular progress indicators in the student dashboard.

## Setup Instructions
1. **Clone or Download the Repository**:
   - Clone using `git clone <repository-url>` or download and extract the ZIP file.
   
2. **Open the Project**:
   - Navigate to the project folder.

3. **Run the Application**:
   - **Frontend Files**: Open HTML files (e.g., `index.html`, `student-dashboard.html`) in a web browser.
   - **PHP Backend**:
     - For `gemini-api.php`, set up a local PHP server (e.g., XAMPP, WAMP).
     - Replace `YOUR_GEMINI_API_KEY` in `gemini-api.php` with your Google Gemini API key.
     - Place the PHP file in your server’s root directory (e.g., `htdocs` in XAMPP).
     - Access via `http://localhost/gemini-api.php`.

4. **Dependencies**:
   - Requires an internet connection for:
     - Tailwind CSS CDN (`https://cdn.tailwindcss.com`).
     - WorldTimeAPI (in `announcements.html`).
     - Google Fonts ("Vast Shadow" and "Caveat").
     - Google Gemini API (for `gemini-api.php`).
   - Ensure the `incognito_learner.png` logo file is in a `landing/` subdirectory.
   - If using a local Tailwind setup, run `npx tailwindcss -i ./src/input.css -o ./dist/output.css --watch` after setting up `tailwind.config.js`.

## Usage
### Shared Components
- **Header**: Found across all pages, providing navigation links and a Login/SignUp button.
- **Footer**: Includes the Incognito Learner description, links, and a newsletter subscription form.

### Faculty Quiz Portal
- **Dashboard (`index.html`)**: Manage courses, assignments, quizzes, and notifications.
- **Courses (`courses.html`)**: Add/edit/delete courses.
- **Assignments (`assignments.html`)**: Create assignments with deadlines.
- **Quizzes (`quizzes.html`, `quiz.html`, `edit-quiz.html`)**: Create, take, and edit quizzes.
- **Reports (`reports.html`)**: View student performance details.
- **Authentication (`signup.html`, `login.html`, `forgot-password.html`)**: Simulated user management (login with `admin@example.com` / `password123`).

### Admin Panel
- **Dashboard (`index.php`)**: View system stats and instructor-course details.
- **Users (`users.html`)**: List users with removal option (static data).
- **Courses (`courses.html`)**: Add courses with images and details; delete courses.
- **Announcements (`announcements.html`)**: Post and remove announcements with real-time timestamps.
- **Reports (`reports.html`)**: Identical to Faculty Portal’s student reporting.
- **Profile (`profile.html`)**: View user info and logout.
- **Authentication (`signup.html`, `login.html`, `forgot-password.html`)**: Same as Faculty Portal.

### Student Portal
- **Participate in Quiz (`participate-quiz.html`)**: Answer multiple-choice questions and submit (redirects to `index.php` after submission).
- **Student Dashboard (`student-dashboard.html`)**: View course progress, statistics (time spent, overall progress), and submit feedback.

### AI Integration
- **Google Gemini API (`gemini-api.php`)**: Send a POST request with a JSON body containing a `message` field to receive an AI-generated response. Example:
  ```bash
  curl -X POST http://localhost/gemini-api.php -H "Content-Type: application/json" -d '{"message": "What is the capital of France?"}'
  ```

## File Structure
```
incognito-learner/
├── shared/
│   ├── header.html            # Shared Header
│   ├── footer.html            # Shared Footer
│   └── landing/
│       └── incognito_learner.png  # Incognito Learner Logo
├── faculty-quiz-portal/
│   ├── index.html             # Faculty Dashboard
│   ├── courses.html           # Course Management
│   ├── assignments.html       # Assignment Management
│   ├── quizzes.html           # Quiz Management
│   ├── quiz.html              # Take Quiz Page
│   ├── edit-quiz.html         # Edit Quiz Page
│   ├── reports.html           # Student Reports
│   ├── signup.html            # Sign Up Page
│   ├── login.html             # Login Page
│   ├── forgot-password.html   # Forgot Password Page
│   └── README.md              # Faculty Portal Docs
├── admin-panel/
│   ├── index.php              # Admin Dashboard (assumes PHP backend)
│   ├── users.html             # User Management
│   ├── courses.html           # Course Management
│   ├── reports.html           # Student Reports
│   ├── announcements.html     # Announcements Management
│   ├── profile.html           # User Profile
│   ├── signup.html            # Sign Up Page
│   ├── login.html             # Login Page
│   ├── forgot-password.html   # Forgot Password Page
│   └── README.md              # Admin Panel Docs
├── student-portal/
│   ├── participate-quiz.html  # Quiz Participation Page
│   ├── student-dashboard.html # Student Dashboard
│   └── README.md              # Student Portal Docs
├── api/
│   └── gemini-api.php         # Google Gemini API Integration
├── src/
│   └── input.css              # Tailwind Input CSS (if using local Tailwind)
├── dist/
│   └── output.css             # Tailwind Output CSS (if using local Tailwind)
├── tailwind.config.js         # Tailwind Configuration
└── README.md                  # Main Documentation
```

**Note**: The `signup.html`, `login.html`, `forgot-password.html`, and `reports.html` files are duplicated across Faculty and Admin systems. In a real application, these should be unified. The `header.html` and `footer.html` are conceptual files representing shared components.

## Contributing
1. Fork the repository.
2. Create a branch (`git checkout -b feature-branch`).
3. Commit changes (`git commit -m "Add feature"`).
4. Push to your branch (`git push origin feature-branch`).
5. Submit a pull request.

Contributions are welcome, especially for:
- Backend integration with a database (e.g., MySQL).
- Unifying duplicated files (e.g., authentication pages).
- Implementing dynamic quiz data in `participate-quiz.html`.
- Enhancing AI features with the Google Gemini API.
- Improving the UI/UX with more dynamic visualizations.

## License
This project is licensed under the [MIT License](LICENSE). Use, modify, and distribute it freely.

---

### Notes
- **Frontend-Only Limitation**: Most components rely on `localStorage` and lack a proper backend. Integrate a server and database for production.
- **Authentication**: Simulated with hardcoded credentials (`admin@example.com` / `password123`). Replace with secure authentication.
- **Date Context**: Faculty Portal assumes April 04, 2025; Admin Panel uses dynamic timestamps via WorldTimeAPI.
- **Responsive Design**: Admin Panel’s `announcements.html` includes a mobile-friendly sidebar toggle; shared components and student pages are also responsive.
- **AI Integration**: Requires a Google Gemini API key. Ensure proper error handling and security for production use.
- **Tailwind Setup**: The `tailwind.config.js` suggests a local Tailwind setup, but most files use the CDN. Choose one approach for consistency.
