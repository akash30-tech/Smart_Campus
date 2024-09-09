<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Management - Smart Campus Management System</title>
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
                <h1>Event Management</h1>
                <p>Manage and organize campus events efficiently</p>
            </div>

            <!-- Card Container -->
            <div class="card-container">
                <!-- Example Cards -->
                <div class="card">
                    <h3>Create Event</h3>
                    <p>Plan and schedule new events for the campus community.</p>
                    <a href="create-event.php">Create Event</a>
                </div>

                <div class="card">
                    <h3>Manage Events</h3>
                    <p>View, edit, and update existing events on the campus calendar.</p>
                    <a href="manage-events.php">Manage Events</a>
                </div>

                <div class="card">
                    <h3>Event Reports</h3>
                    <p>Generate reports to analyze event attendance and feedback.</p>
                    <a href="event-reports.php">View Reports</a>
                </div>
                
                <!-- Additional Cards -->
                <div class="card">
                    <h3>Upcoming Events</h3>
                    <p>See the list of all upcoming events happening on campus.</p>
                    <a href="upcoming-events.php">View Events</a>
                </div>

                <div class="card">
                    <h3>Past Events</h3>
                    <p>Review and analyze all previously held events.</p>
                    <a href="past-events.php">View Past Events</a>
                </div>

                <div class="card">
                    <h3>Event Feedback</h3>
                    <p>Collect and manage feedback from attendees for continuous improvement.</p>
                    <a href="event-feedback.php">View Feedback</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
