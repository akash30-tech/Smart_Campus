<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard - Smart Campus Management System</title>
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <div class="dashboard-container">
      <!-- Sidebar -->
      <div class="sidebar-container">
        <aside class="sidebar">
          <h2>Smart Campus</h2>
          <ul>
            <li><a href="course-management.php">Course Management</a></li>
            <li><a href="attendance-management.php">Attendance</a></li>
            <li><a href="examination.php">Examination</a></li>
            <li><a href="library.php">Library</a></li>
            <li><a href="event-management.php">Events</a></li>
            <li><a href="hostel-management.php">Hostels</a></li>
            <li><a href="transportation.php">Transportation</a></li>
            <li><a href="finance.php">Finance</a></li>
            <li><a href="communication.php">Communication</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </aside>
      </div>

      <!-- Main Content -->
      <!-- Main Content -->
      <div class="content-container">
        <div class="content-header">
          <h1>Welcome to the Admin Dashboard</h1>
          <p>Manage your campus operations efficiently.</p>
        </div>

        <div class="card-container">
          <div class="card">
            <h3>Course Management</h3>
            <p>View, edit, and manage courses offered in the campus.</p>
            <a href="course-management.php">Manage Courses</a>
          </div>

          <div class="card">
            <h3>Check Attendance</h3>
            <p>Track and update student attendance records.</p>
            <a href="attendance-management.php">Manage Attendance</a>
          </div>

          <div class="card">
            <h3>Schedule Examination</h3>
            <p>Schedule and manage exams for various courses.</p>
            <a href="examination.php">Manage Exams</a>
          </div>

          <!-- Add more cards as needed -->
        </div>
      </div>
    </div>
  </body>
</html>
