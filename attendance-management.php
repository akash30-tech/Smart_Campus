<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Management - Smart Campus Management System</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
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
            <!-- Content Header -->
            <div class="content-header">
                <h1>Attendance Management</h1>
                <p>Manage and track student attendance with ease.</p>
            </div>

            <!-- Card Container -->
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card">
                    <h3>View Attendance</h3>
                    <p>Check the attendance records for each student and class.</p>
                    <a href="view-attendance.php">View Details</a>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <h3>Mark Attendance</h3>
                    <p>Mark attendance for today's classes in a few clicks.</p>
                    <a href="mark-attendance.php">Mark Now</a>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <h3>Attendance Reports</h3>
                    <p>Generate detailed attendance reports for analysis.</p>
                    <a href="attendance-reports.php">Generate Report</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
