<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Management - Smart Campus Management System</title>
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
                <h1>Course Management</h1>
                <p>Manage courses, assignments, and curriculum efficiently.</p>
            </div>
            
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card">
                    <h3>Add New Course</h3>
                    <p>Create a new course and add it to the curriculum.</p>
                    <a href="add-course.php">Add Course</a>
                </div>
                <!-- Card 2 -->
                <div class="card">
                    <h3>View All Courses</h3>
                    <p>Check the list of all available courses.</p>
                    <a href="view-courses.php">View Courses</a>
                </div>
                <!-- Card 3 -->
                <div class="card">
                    <h3>Edit Course</h3>
                    <p>Update or remove existing course information.</p>
                    <a href="edit-course.php">Edit Course</a>
                </div>
                <!-- Add more cards as needed -->
            </div>
        </div>
    </div>
</body>
</html>
