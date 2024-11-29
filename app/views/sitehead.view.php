<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Site Head Dashboard</title>
	<link rel="stylesheet" href="<?= ROOT ?>/assets/css/sitehead.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="<?= ROOT ?>/assets/js/sitehead.js" defer></script>
</head>

<body>
	<div class="admin-container">
	<div class="top-bar">
            <div class="logo-section">
                <img src="<?= ROOT ?>/assets/images/logo.png" width="100px">
            </div>

            <div class="user-actions">
                <!-- <button class="notification-btn"><i class="fas fa-bell"></i></button> -->
                <button class="profile-btn" onclick="showSection('profile-section')"><i
                        class="fas fa-user"></i></button>
                <div class="user-info">
                    <span class="username">
                        <?php
                        if (isset($_SESSION['name'])) {
                            echo $_SESSION['name'];
                        }
                        ?>
                    </span>
                </div>
            </div>
        </div>

		<div class="sidebar">
			<ul>
				<li><a onclick="showSection('dashboard-section')">Dashboard</a></li>
				<li><a onclick="showSection('manage-workers-section')">Manage Workers</a></li>
				<li><a onclick="showSection('request-fertilizers-section')">Request Fertilizers</a></li>
				<li><a onclick="showSection('mark-attendance-section')">Mark Attendance</a></li>
				<li><a onclick="showSection('report-issues-section')">Report an Issue</a></li>
			</ul>
			<ul class="logout">
				<li><a href="<?= ROOT ?>/login/logout">Log Out</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="dashboard-section" class="section">
				<div class="metric-grid">
					<div class="metric-card">
						<h3>Worker Count</h3>
						<div class="metric-content">
							<span class="metric-value">15</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-workers-section')">View</button>
					</div>
					<div class="metric-card">
						<h3>Supervisor Count</h3>
						<div class="metric-content">
							<span class="metric-value">20</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-supervisors-section')">View</button>
					</div>
					<div class="metric-card">
						<h3>Total Bids</h3>
						<div class="metric-content">
							<span class="metric-value">40</span>
							<i class="fas fa-briefcase"></i>
						</div>
						<button onclick="showSection('manage-bids-section')">View</button>
					</div>
					<div class="metric-card">
						<h3>Buyer Count</h3>
						<div class="metric-content">
							<span class="metric-value">240</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-buyers-section')">View</button>
					</div>
				</div>
				<div class="events-container">
					<div class="events-header">
						<h2><i class="fas fa-calendar-day"></i> Today's Events</h2>
						<span class="current-date"><?= date("F j, Y") ?></span>
					</div>
					<div class="events-list">
						<div class="event-card high-priority">
							<div class="event-icon">
								<i class="fas fa-map-marker-alt"></i>
							</div>
							<div class="event-details">
								<div class="event-header">
									<h3>Soil Inspection</h3>
									<span class="priority-badge">High Priority</span>
								</div>
								<div class="event-info">
									<span><i class="fas fa-clock"></i> 09:00 AM</span>
									<span><i class="fas fa-map-pin"></i> Rice Field Block A</span>
									<span><i class="fas fa-user"></i> Yasitha Vas</span>
								</div>
							</div>
						</div>
						<div class="event-card medium-priority">
							<div class="event-icon">
								<i class="fas fa-truck"></i>
							</div>
							<div class="event-details">
								<div class="event-header">
									<h3>Fertilizer Delivery</h3>
									<span class="priority-badge">Medium Priority</span>
								</div>
								<div class="event-info">
									<span><i class="fas fa-clock"></i> 10:30 AM</span>
									<span><i class="fas fa-map-pin"></i> Warehouse 2</span>
									<span><i class="fas fa-user"></i> Samantha Perera</span>
								</div>
							</div>
						</div>
						<div class="event-card high-priority">
							<div class="event-icon">
								<i class="fas fa-users"></i>
							</div>
							<div class="event-details">
								<div class="event-header">
									<h3>Buyer Meeting</h3>
									<span class="priority-badge">High Priority</span>
								</div>
								<div class="event-info">
									<span><i class="fas fa-clock"></i> 02:00 PM</span>
									<span><i class="fas fa-map-pin"></i> Conference Room</span>
									<span><i class="fas fa-user"></i> Prabath Jayasinghe</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Manage Bids Section -->
			<div id="manage-workers-section" class="section" style="display:none;">
				<center>
					<h1>Manage Workers</h1>
				</center>
				<br><br>
				<!-- Search and Filter Section -->
				<div class="filter-section">
					<input type="text" id="search-bar" placeholder="Search supervisors by name or email">
					<select id="status-filter">
						<option value="">All Status</option>
						<option value="active">Active</option>
						<option value="inactive">Inactive</option>
					</select>
					<select id="zone-filter">
						<option value="">Zone</option>
						<option value="Zone 1">Zone 1</option>
						<option value="Zone 2">Zone 2</option>
					</select>
					<button class="green-btn" id="add-supervisor-btn">Add Worker</button>
				</div>
				<!-- Supervisors Table -->
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Zone</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="supervisor-list">
						<tr data-id="1">
							<td>Yasitha Vas</td>
							<td>yvas@gmail.com</td>
							<td>0715559997</td>
							<td>Zone 1</td>
							<td>Active</td>
							<td>
								<button class="green-btn edit-btn" data-id="1">Edit</button>
								<button class="red-btn">Deactivate</button>
							</td>
						</tr>
						<tr data-id="2">
							<td>Samantha Perera</td>
							<td>samantha@gmail.com</td>
							<td>0715551234</td>
							<td>Zone 2</td>
							<td>Inactive</td>
							<td>
								<button class="green-btn edit-btn" data-id="2">Edit</button>
								<button class="red-btn">Deactivate</button>
							</td>
						</tr>
						<tr data-id="3">
							<td>Prabath Jayasinghe</td>
							<td>prabathjaya@gmail.com</td>
							<td>0776543210</td>
							<td>Zone 3</td>
							<td>Active</td>
							<td>
								<button class="green-btn edit-btn" data-id="3">Edit</button>
								<button class="red-btn">Deactivate</button>
							</td>
						</tr>
						<tr data-id="4">
							<td>Anushka Fernando</td>
							<td>anushka.fernando@gmail.com</td>
							<td>0789004567</td>
							<td>Zone 4</td>
							<td>Active</td>
							<td>
								<button class="green-btn edit-btn" data-id="4">Edit</button>
								<button class="red-btn">Deactivate</button>
							</td>
						</tr>
						<tr data-id="5">
							<td>Kamini Mapa</td>
							<td>kamini.mapa@gmail.com</td>
							<td>0712233445</td>
							<td>Zone 5</td>
							<td>Inactive</td>
							<td>
								<button class="green-btn edit-btn" data-id="5">Edit</button>
								<button class="red-btn">Deactivate</button>
							</td>
						</tr>
					</tbody>
				</table>
				<!-- Add New Supervisor Button -->
				<br>
				<!-- Supervisor Details Modal -->
				<div id="supervisor-modal" class="modal">
					<div class="modal-content">
						<span class="close-modal">&times;</span>
						<h2>Worker Details</h2>
						<!-- Supervisor details will be populated dynamically -->
						<div id="supervisor-details"></div>
					</div>
				</div>
				<!-- Add Supervisor Form -->
				<div id="add-supervisor-form" class="modal">
					<div class="modal-content">
						<span class="close-form">&times;</span>
						<h2>Add New Worker</h2>
						<form id="new-supervisor-form" class="form-styles">
							<label for="name">Full Name:</label>
							<input type="text" id="name" name="name" required>
							<label for="email">Email:</label>
							<input type="email" id="email" name="email" required>
							<label for="phone">Phone Number:</label>
							<input type="tel" id="phone" name="phone" required>
							<label for="zone">Zone:</label>
							<select id="zone" name="zone" required>
								<option value="Zone 1">Zone 1</option>
								<option value="Zone 2">Zone 2</option>
								<option value="Zone 3">Zone 3</option>
								<option value="Zone 4">Zone 4</option>
							</select>
							<label for="status">Status:</label>
							<select id="status" name="status" required>
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
							</select>
							<button type="submit">Add Worker</button>
						</form>
					</div>
				</div>
				<!-- Edit Supervisor Form -->
				<div id="edit-supervisor-form" class="modal">
					<div class="modal-content">
						<span class="close-form">&times;</span>
						<h2>Edit Worker</h2>
						<form id="edit-supervisor-form" class="form-styles">
							<input type="hidden" id="edit-supervisor-id">
							<label for="edit-name">Full Name:</label>
							<input type="text" id="edit-name" name="name" required>
							<label for="edit-email">Email:</label>
							<input type="email" id="edit-email" name="email" required>
							<label for="edit-phone">Phone Number:</label>
							<input type="tel" id="edit-phone" name="phone" required>
							<label for="edit-zone">Zone:</label>
							<select id="edit-zone" name="zone" required>
								<option value="Zone 1">Zone 1</option>
								<option value="Zone 2">Zone 2</option>
								<option value="Zone 3">Zone 3</option>
								<option value="Zone 4">Zone 4</option>
							</select>
							<label for="edit-status">Status:</label>
							<select id="edit-status" name="status" required>
								<option value="Active">Active</option>
								<option value="Inactive">Inactive</option>
							</select>
							<button type="submit">Update Worker</button>
						</form>
					</div>
				</div>
			</div>
			<div id="request-fertilizers-section" class="section" style="display:none;">
				<div class="complaint-section">
					<div class="form-container">
						<h1 class="complaint-topic">Request for Fertilizers</h1>
						<form class="form">
							<div class="form-group">
								<label for="name">Land ID</label>
								<input type="text" id="name" name="name" required>
								<label for="complaint-type">Fertilizer Type</label>
								<select id="complaint-type" name="complaint-type" required>
									<option value="">Select Fertilizer Type</option>
									<option value="urea">Urea</option>
									<option value="dap">DAP</option>
									<option value="npk">NPK</option>
									<option value="potash">Potash</option>
									<option value="other">Other</option>
								</select>
								<label for="description">Special Requirements/Notes</label>
								<textarea id="description" name="description"
									placeholder="Special Requirements (If any)"></textarea>
								<label>Preferred Delivery Date</label>
								<input type="date" required>
								<button class="form-submit-btn" type="submit">
									<i class="fas fa-paper-plane"></i>&nbsp; Submit Request
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div id="mark-attendance-section" class="section" style="display:none;">
				<div class="header">
					<center>
						<h1>Worker Attendance Tracker</h1>
					</center>
					<br>
					<div class="date-container">
						<span class="date-label">Date:</span>
						<input type="date" class="date-picker" value="2024-11-23">
					</div>
				</div>
				<div class="attendance-form">
					<table class="dashboard-table">
						<thead>
							<tr>
								<th>Worker ID</th>
								<th>Name</th>
								<th>Status</th>
								<th>Check-in Time</th>
								<th>Check-out Time</th>
							</tr>
						</thead>
						<tbody id="supervisor-list">
							<tr>
								<td>W001</td>
								<td>Kamal Perera</td>
								<td>
									<select class="status-select">
										<option value="present">Present</option>
										<option value="absent">Absent</option>
										<option value="late">Late</option>
										<option value="leave">Leave</option>
									</select>
								</td>
								<td><input type="time" class="time-input"></td>
								<td><input type="time" class="time-input"></td>
							</tr>
							<tr>
								<td>W002</td>
								<td>Janeesh Kulathunge</td>
								<td>
									<select class="status-select">
										<option value="present">Present</option>
										<option value="absent">Absent</option>
										<option value="late">Late</option>
										<option value="leave">Leave</option>
									</select>
								</td>
								<td><input type="time" class="time-input"></td>
								<td><input type="time" class="time-input"></td>
							</tr>
							<tr>
								<td>W003</td>
								<td>Mike Silva</td>
								<td>
									<select class="status-select">
										<option value="present">Present</option>
										<option value="absent">Absent</option>
										<option value="late">Late</option>
										<option value="leave">Leave</option>
									</select>
								</td>
								<td><input type="time" class="time-input"></td>
								<td><input type="time" class="time-input"></td>
							</tr>
						</tbody>
					</table>
					<center><button class="green-btn">Save Attendance</button></center>
				</div>
			</div>
			<div id="report-issues-section" class="section" style="display:none;">
				<div class="complaint-section">
					<div class="form-container">
						<h1 class="complaint-topic">Report an Issue</h1>
						<form class="form" action="<?= ROOT ?>/Issue/addIssue" method="POST"
							enctype="multipart/form-data">
							<div class="form-group">
								<label for="name">Full Name</label>
								<input type="text" id="name" name="name" required>
								<label for="complaint-type">Type of Issue</label>
								<select id="complaint-type" name="complaint-type" required>
									<option value="">Select a category</option>
									<option value="workplace-safety">Workplace Safety Issues</option>
									<option value="salary-delay">Salary Payment Delays</option>
									<option value="unfair-treatment">Unfair Treatment by Management</option>
									<option value="equipment-fault">Faulty Equipment or Tools</option>
									<option value="long-hours">Excessive Working Hours</option>
									<option value="leave-requests">Denied or Delayed Leave Requests</option>
									<option value="training-issues">Inadequate Training Provided</option>
									<option value="workload">Excessive Workload</option>
									<option value="communication">Poor Communication from Supervisors</option>
									<option value="other">Other</option>
								</select>
								<label for="description">Issue Description</label>
								<textarea id="description" name="description" required
									placeholder="Please provide detailed information about your complaint..."></textarea>
								<label for="attachment">Supporting Documents (if any)</label>
								<input type="file" id="attachment" name="attachment">
								<p class="attachment-note">Accepted file formats: PDF, JPG, PNG (Max size: 5MB)</p>
								<button class="form-submit-btn" type="submit">
									<i class="fas fa-paper-plane"></i>&nbsp; Submit Issue
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>

			<div id="profile-section" class="section" style="display:none;">
				<center>
					<div class="wrapper">
						<div class="profile-container">
							<div class="profile-header">
								<div class="profile-image-container">
									<img id="profileImage" src="<?= ROOT ?>/assets/images/hero.jpg" alt="User Profile"
										class="profile-image">
									<label for="imageUpload" class="image-edit-overlay">✏️</label>
									<input type="file" id="imageUpload" accept="image/*">
								</div>

								<div class="profile-details-edit">
									<div class="detail-group">
										<div class="detail-label">Full Name</div>
										<div id="fullName" class="detail-value" contenteditable="true"
											data-placeholder="Enter full name">Sasmitha Silva</div>
									</div>
								</div>
							</div>
							<div class="detail-group">
								<div class="detail-label">Email Address</div>
								<div id="emailAddress" class="detail-value" contenteditable="true"
									data-placeholder="Enter email address">silvasasmitha53@gmail.com</div>
							</div>
							<div class="detail-group">
								<div class="detail-label">Contact Number</div>
								<div id="contactNumber" class="detail-value" contenteditable="true"
									data-placeholder="Enter phone number">0715479744</div>
							</div>
							<div class="detail-group">
								<div class="detail-label">Address</div>
								<div id="address" class="detail-value" contenteditable="true"
									data-placeholder="Enter full address">12/1, 1st Lane, Kandy Road, Kandy</div>
							</div>
							<button id="submitBtn" class="green-btn">Save Profile</button>
						</div>
					</div>
				</center>
			</div>
		</div>
	</div>
</body>

</html>