<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard - Smart Campus Management System</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="dashboard-container">
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

        <!-- Main Content -->
        <div class="content-container">
            <div class="content-header">
                <h1>Welcome to the Student Dashboard</h1>
                <p>Manage your campus activities efficiently.</p>
            </div>

            <div class="card-container">
                <div class="card">
                    <h3>View Course</h3>
                    <p>View and manage your enrolled courses.</p>
                    <a href="course-management.php" class="btn">Go to Courses</a>
                </div>

                <div class="card">
                    <h3>View Attendance</h3>
                    <p>Check your attendance records.</p>
                    <a href="attendance-management.php" class="btn">View Attendance</a>
                </div>

                <div class="card">
                    <h3>View Examinations</h3>
                    <p>View exam schedules and results.</p>
                    <a href="examination.php" class="btn">Manage Exams</a>
                </div>
                <!-- More cards can be added as needed -->
            </div>
        </div>
    </div>
</body>
</html>
