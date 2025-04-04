

# Incognito Learner: Educational Platform

![Incognito Learner Logo](incognito_learner.png)

**Incognito Learner** is a comprehensive educational platform designed to facilitate online learning for students, faculty, and administrators. It includes three main components: the **Faculty Quiz Portal** for instructors, the **Admin Panel** for system-wide management, and the **Student Portal** for student engagement. The platform features consistent branding with the "Incognito Learner" logo, a shared header, and a footer, ensuring a cohesive user experience.

## Table of Contents
- [Overview](#overview)
- [Features](#features)
- [Technologies Used](#technologies-used)
- [Setup Instructions](#setup-instructions)
- [Usage](#usage)
- [File Structure](#file-structure)
- [Why PHP Over Node.js](#why-php-over-nodejs)
- [Contributing](#contributing)
- [License](#license)

## Overview
**Incognito Learner** streamlines online education by providing tools for students, faculty, and administrators. The platform comprises:

- **Faculty Quiz Portal**: For instructors to manage courses, assignments, quizzes, and student performance.
- **Admin Panel**: For administrators to oversee users, courses, announcements, and reports.
- **Student Portal**: For students to participate in quizzes, track their progress, and provide feedback.

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

## Technologies Used
- **HTML5**: Page structure.
- **Tailwind CSS**: Styling via CDN (`https://cdn.tailwindcss.com`) and a local configuration (`tailwind.config.js`).
- **JavaScript**: Interactivity, form handling, and local storage management.
- **Local Storage**: Simulated backend for storing quizzes, assignments, courses, and announcements.
- **APIs**:
  - WorldTimeAPI (in `announcements.html`) for dynamic timestamps.
- **Fonts**: Google Fonts ("Vast Shadow" for header, "Caveat" for footer).
- **File Upload**: Client-side image preview for course images.
- **PHP**: Used for backend routing (e.g., `index.php`) and potential server-side logic.
- **SVG**: Used for circular progress indicators in the student dashboard.

## Setup Instructions
1. **Clone or Download the Repository**:
   - Clone using `git clone <repository-url>` or download and extract the ZIP file.
   
2. **Open the Project**:
   - Navigate to the project folder.

3. **Run the Application**:
   - **Frontend Files**: Open HTML files (e.g., `index.html`, `student-dashboard.html`) in a web browser.
   - **PHP Backend**:
     - For files like `index.php`, set up a local PHP server (e.g., XAMPP, WAMP).
     - Place the project files in your server’s root directory (e.g., `htdocs` in XAMPP).
     - Access via `http://localhost/<file-name>.php`.

4. **Dependencies**:
   - Requires an internet connection for:
     - Tailwind CSS CDN (`https://cdn.tailwindcss.com`).
     - WorldTimeAPI (in `announcements.html`).
     - Google Fonts ("Vast Shadow" and "Caveat").
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
├── src/
│   └── input.css              # Tailwind Input CSS (if using local Tailwind)
├── dist/
│   └── output.css             # Tailwind Output CSS (if using local Tailwind)
├── tailwind.config.js         # Tailwind Configuration
└── README.md                  # Main Documentation
```

**Note**: The `signup.html`, `login.html`, `forgot-password.html`, and `reports.html` files are duplicated across Faculty and Admin systems. In a real application, these should be unified. The `header.html` and `footer.html` are conceptual files representing shared components.

## Why PHP Over Node.js
The Incognito Learner platform uses PHP for its backend components (e.g., `index.php` in the Admin Panel and redirects in `participate-quiz.html`). Here’s why PHP was chosen over Node.js:

- **Ease of Deployment and Hosting Compatibility**:
  - PHP is supported by nearly all web hosting providers and works seamlessly with popular servers like Apache and Nginx. Most shared hosting environments come with PHP pre-installed, making it easier to deploy the platform without additional server setup.
  - Node.js, while powerful, often requires more configuration (e.g., installing Node.js on the server, setting up a process manager like PM2) and may not be supported on all hosting plans, especially budget-friendly shared hosting.

- **Simplicity for Small-Scale Backend Tasks**:
  - The platform currently uses PHP for basic routing (e.g., `index.php`) and potential server-side logic (e.g., handling quiz submissions). PHP’s lightweight nature and ability to run standalone scripts make it ideal for these tasks without the overhead of setting up a full Node.js environment.
  - Node.js is better suited for applications requiring real-time, asynchronous operations (e.g., chat apps), but Incognito Learner’s backend needs are minimal at this stage, focusing on simple routing and future database integration.

- **Developer Familiarity and Ecosystem**:
  - PHP has been a staple in web development for decades, and many developers are familiar with it. The project’s use of PHP aligns with traditional web development practices, making it easier for a broader team to contribute.
  - While Node.js offers a modern JavaScript-based backend, it requires familiarity with JavaScript frameworks (e.g., Express) and asynchronous programming, which might introduce a learning curve for developers more accustomed to PHP.

- **Integration with Existing Tools**:
  - PHP integrates well with popular databases like MySQL (often used in educational platforms) and works seamlessly with tools like XAMPP or WAMP for local development. This aligns with the platform’s potential future needs (e.g., storing quiz results or user data).
  - Node.js, while capable of database integration, might require additional setup (e.g., installing database drivers like `mysql2`) and may not be as straightforward for developers used to the LAMP stack (Linux, Apache, MySQL, PHP).

- **Performance for Static Workloads**:
  - PHP is optimized for serving static or semi-dynamic content, which fits the current needs of Incognito Learner (e.g., rendering dashboards, handling form submissions). It has a lower memory footprint for these tasks compared to Node.js, which excels in handling concurrent, event-driven workloads.
  - Node.js’s event loop is advantageous for high-concurrency scenarios, but the platform doesn’t currently require such capabilities, making PHP a more resource-efficient choice.

In summary, PHP was chosen for its ease of deployment, simplicity, and compatibility with traditional web hosting environments, making it a practical choice for the platform’s current backend needs. As the platform scales, Node.js could be considered for real-time features or high-concurrency requirements.

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
- Improving the UI/UX with more dynamic visualizations.

## License
This project is licensed under the [MIT License](LICENSE). Use, modify, and distribute it freely.

---

### Notes
- **Frontend-Only Limitation**: Most components rely on `localStorage` and lack a proper backend. Integrate a server and database for production.
- **Authentication**: Simulated with hardcoded credentials (`admin@example.com` / `password123`). Replace with secure authentication.
- **Date Context**: Faculty Portal assumes April 04, 2025; Admin Panel uses dynamic timestamps via WorldTimeAPI.
- **Responsive Design**: Admin Panel’s `announcements.html` includes a mobile-friendly sidebar toggle; shared components and student pages are also responsive.
- **Tailwind Setup**: The `tailwind.config.js` suggests a local Tailwind setup, but most files use the CDN. Choose one approach for consistency.
