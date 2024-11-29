<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Worker Dashboard</title>
	<link rel="stylesheet" href="<?= ROOT ?>/assets/css/worker.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="<?= ROOT ?>/assets/js/worker.js" defer></script>
</head>

<body>
	<div class="admin-container">
		<div class="top-bar">
			<div class="logo-section">
				<img src="<?= ROOT ?>/assets/images/logo.png" width="100px">
			</div>
			<div class="user-actions">
				<button class="notification-btn"><i class="fas fa-bell"></i></button>
				<button class="profile-btn" onclick="showSection('profile-section')"><i
						class="fas fa-user"></i></button>
			</div>
		</div>

		<div class="sidebar">
			<ul>
				<li><a onclick="showSection('dashboard-section')">Dashboard</a></li>
				<li><a onclick="showSection('work-history-section')">Work History</a></li>
				<li><a onclick="showSection('file-a-complaint-section')">File a Complaint</a></li>
			</ul>
			<ul class="logout">
				<li><a href="<?= ROOT ?>/login/logout">Log Out</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="dashboard-section" class="section">
				<div class="worker-events-container">
					<div class="worker-events-header">
						<h2><i class="fas fa-calendar-check"></i> Available Events</h2>
						<span class="current-date"><?= date("F j, Y") ?></span>
					</div>
					<div class="worker-events-list">
						<!-- Event Cards -->
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-leaf"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Land Clearing</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 09:00 AM</span>
									<span><i class="fas fa-map-pin"></i> Field A, No. 12, Green Valley Road</span>
									<span><i class="fas fa-user"></i> Ruwan Fernando</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-vial"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Soil Testing</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 11:00 AM</span>
									<span><i class="fas fa-map-pin"></i> Lab 1, No. 45, Orchard Street</span>
									<span><i class="fas fa-user"></i> Priyanka Silva</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-seedling"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Fertilizing</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 01:00 PM</span>
									<span><i class="fas fa-map-pin"></i> Field B, No. 89, Sunset Avenue</span>
									<span><i class="fas fa-user"></i> Saman Kumara</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-seedling"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Seed Sowing</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 03:00 PM</span>
									<span><i class="fas fa-map-pin"></i> Field C, No. 7, Maple Lane</span>
									<span><i class="fas fa-user"></i> Nuwan Perera</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-tractor"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Harvesting</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 05:00 PM</span>
									<span><i class="fas fa-map-pin"></i> Field D, No. 23, Sunshine Road</span>
									<span><i class="fas fa-user"></i> Chaminda Karunaratne</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-box"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Processing the Harvest</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 07:00 PM</span>
									<span><i class="fas fa-map-pin"></i> Processing Unit, No. 5, Industrial Park</span>
									<span><i class="fas fa-user"></i> Kusal Jayawardena</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
						<div class="worker-event-card">
							<div class="worker-event-icon">
								<i class="fas fa-broom"></i>
							</div>
							<div class="worker-event-details">
								<div class="worker-event-header">
									<h3>Weeding</h3>
								</div>
								<div class="worker-event-info">
									<span><i class="fas fa-clock"></i> 08:00 AM</span>
									<span><i class="fas fa-map-pin"></i> Field E, No. 37, Evergreen Lane</span>
									<span><i class="fas fa-user"></i> Ashoka Rathnayake</span>
								</div>
							</div>
							<div class="worker-event-actions">
								<button class="green-btn">Apply</button>
								<button class="red-btn">Remove</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="work-history-section" class="section" style="display:none;">
				<center>
					<h1>Work History</h1>
				</center>
				<!-- Search and Filter Section
						<div class="filter-section">
							<select id="status-filter">
								<option value="">All Status</option>
								<option value="active">Active</option>
								<option value="inactive">Inactive</option>
							</select>
						</div> -->
				<!-- Supervisors Table -->
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Land Location</th>
							<th>Hours Worked</th>
							<th>Date</th>
						</tr>
					</thead>
					<tbody id="supervisor-list">
						<tr>
							<td>Green Valley Farm</td>
							<td>8</td>
							<td>2024-11-21</td>
						</tr>
						<tr>
							<td>Sunny Acres</td>
							<td>6</td>
							<td>2024-11-20</td>
						</tr>
						<tr>
							<td>Hillside Plantation</td>
							<td>7</td>
							<td>2024-11-19</td>
						</tr>
						<tr>
							<td>Riverside Orchards</td>
							<td>5</td>
							<td>2024-11-18</td>
						</tr>
						<tr>
							<td>Golden Fields</td>
							<td>9</td>
							<td>2024-11-17</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="file-a-complaint-section" class="section" style="display:none;">
				<div class="complaint-section">
					<div class="form-container">
						<h1 class="complaint-topic">File a Complaint</h1>
						<form class="form">
							<div class="form-group">
								<label for="name">Full Name</label>
								<input type="text" id="name" name="name" required>
								<label for="complaint-type">Type of Complaint</label>
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
								<label for="description">Complaint Description</label>
								<textarea id="description" name="description" required
									placeholder="Please provide detailed information about your complaint..."></textarea>
								<label for="attachment">Supporting Documents (if any)</label>
								<input type="file" id="attachment" name="attachment">
								<p class="attachment-note">Accepted file formats: PDF, JPG, PNG (Max size: 5MB)</p>
								<button class="form-submit-btn" type="submit">
									<i class="fas fa-paper-plane"></i>&nbsp; Submit Complaint
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