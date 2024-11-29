<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Supervisor Dashboard</title>
	<link rel="stylesheet" href="<?= ROOT ?>/assets/css/supervisor.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="<?= ROOT ?>/assets/js/supervisor.js" defer></script>
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
				<li><a onclick="showSection('manage-fertilizer-section')">Manage Fertilizer</a></li>
				<li><a onclick="showSection('manage-site-heads-section')">Manage Site Heads</a></li>
				<li><a onclick="showSection('manage-workers-section')">Manage Workers</a></li>
				<li><a onclick="showSection('approve-bids-section')">Approve Bids</a></li>
				<li><a onclick="showSection('manage-issues-section')">Manage Issues</a></li>
				<li><a onclick="showSection('event-schedule-section')">Event Schedule</a></li>
				<li><a onclick="showSection('attendance-section')">Attendance</a></li>
			</ul>
			<ul class="logout">
				<li><a href="<?= ROOT ?>/login/logout">Log Out</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="dashboard-section" class="section">
				<div class="metric-grid">
					<div class="metric-card">
						<h3>Lands in the Zone</h3>
						<div class="metric-content">
							<span class="metric-value">15</span>
							<i class="fas fa-seedling"></i>
						</div>
						<button onclick="showSection('manage-lands-section')">View</button>
					</div>
					<div class="metric-card">
						<h3>Workers in the Zone</h3>
						<div class="metric-content">
							<span class="metric-value">30</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-supervisors-section')">View</button>
					</div>
				</div>
				<center>
					<h1>Ongoing Projects</h1>
				</center>
				<br>
				<div class="projects-grid">
					<a href="<?= ROOT ?>/land" style="text-decoration:none;">
						<div class="project-card">
							<img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Project Image" />
							<p>Uyana Road - Moratuwa</p>
							<p>Potato</p>
						</div>
					</a>
					<a href="<?= ROOT ?>/land" style="text-decoration:none;">
						<div class="project-card">
							<img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Project Image" />
							<p>Hill Avenue - New York</p>
							<p>Maize</p>
						</div>
					</a>
					<a href="<?= ROOT ?>/land" style="text-decoration:none;">
						<div class="project-card">
							<img src="<?= ROOT ?>/assets/images/hero.jpg" alt="Project Image" />
							<p>Reid Avenue - Colombo</p>
							<p>Rice</p>
						</div>
					</a>
				</div>
			</div>
			<!-- Manage Fertilizer Section -->
			<div id="manage-fertilizer-section" class="section" style="display:none;">
				<!-- Tab Navigation -->
				<div class="tab-navigation">
					<button class="tab-btn active" onclick="switchTab('handle-request')">Handle Request</button>
					<button class="tab-btn" onclick="switchTab('stock-management')">Stock Management</button>
				</div>
				<!-- Handle Request Tab -->
				<div id="handle-request" class="tab-content active">
					<center>
						<h1>Fertilizer Requests</h1>
					</center>
					<table class="dashboard-table">
						<thead>
							<tr>
								<th>Land ID</th>
								<th>Crop Type</th>
								<th>Bidder's Name</th>
								<th>Bidding Amount</th>
								<th>Percentage of the Harvest</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>L001</td>
								<td>Rice</td>
								<td>John Doe</td>
								<td>LKR 5000</td>
								<td>20%</td>
								<td>
									<button class="green-btn">Accept</button>
									<button class="red-btn">Reject</button>
								</td>
							</tr>
							<!-- Previous table rows can be added here -->
						</tbody>
					</table>
				</div>
				<!-- Stock Management Tab -->
				<div id="stock-management" class="tab-content" style="display:none;">
					<div class="metric-grid">
						<div class="metric-card">
							<h3>Total Fertilizer Stock</h3>
							<div class="metric-content">
								<span class="metric-value">1,250 kg</span>
								<i class="fas fa-box-open"></i>
							</div>
						</div>
						<div class="metric-card">
							<h3>Most Used Fertilizer</h3>
							<div class="metric-content">
								<span class="metric-value">NPK 15-15-15</span>
								<i class="fas fa-chart-pie"></i>
							</div>
						</div>
						<div class="metric-card">
							<h3>Low Stock Alerts</h3>
							<div class="metric-content">
								<span class="metric-value">3</span>
								<i class="fas fa-exclamation-triangle"></i>
							</div>
						</div>
						<div class="metric-card">
							<h3>Recent Purchases</h3>
							<div class="metric-content">
								<span class="metric-value">12</span>
								<i class="fas fa-shopping-cart"></i>
							</div>
						</div>
					</div>
					<center>
						<h1>Fertilizer Inventory</h1>
					</center>
					<table class="dashboard-table">
						<thead>
							<tr>
								<th>Fertilizer Type</th>
								<th>Current Stock</th>
								<th>Reorder Level</th>
								<th>Last Restocked</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>NPK 15-15-15</td>
								<td>350 kg</td>
								<td>250 kg</td>
								<td>2024-03-15</td>
								<td>
									<button class="green-btn">Restock</button>
									<button class="blue-btn">Details</button>
								</td>
							</tr>
							<tr>
								<td>Urea</td>
								<td>200 kg</td>
								<td>150 kg</td>
								<td>2024-02-28</td>
								<td>
									<button class="green-btn">Restock</button>
									<button class="blue-btn">Details</button>
								</td>
							</tr>
							<tr>
								<td>Phosphate</td>
								<td>100 kg</td>
								<td>75 kg</td>
								<td>2024-03-10</td>
								<td>
									<button class="green-btn">Restock</button>
									<button class="blue-btn">Details</button>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<!-- </div> -->
			<div id="approve-bids-section" class="section" style="display:none;">
				<center>
					<h1>Manage Bids</h1>
				</center>
				<!-- <p>Content for managing bids goes here.</p> -->
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Land ID</th>
							<th>Crop Type</th>
							<th>Bidder's Name</th>
							<th>Bidding Amount</th>
							<th>Percentage of the Harvest</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>L001</td>
							<td>Rice</td>
							<td>John Doe</td>
							<td>LKR 5000</td>
							<td>20%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
						<tr>
							<td>L002</td>
							<td>Corn</td>
							<td>Jane Smith</td>
							<td>LKR 4500</td>
							<td>25%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
						<tr>
							<td>L003</td>
							<td>Wheat</td>
							<td>Michael Brown</td>
							<td>LKR 6000</td>
							<td>30%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
						<tr>
							<td>L004</td>
							<td>Barley</td>
							<td>Emily Davis</td>
							<td>LKR 4000</td>
							<td>15%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
						<tr>
							<td>L005</td>
							<td>Tomato</td>
							<td>Chris Lee</td>
							<td>LKR 3500</td>
							<td>10%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
						<tr>
							<td>L006</td>
							<td>Carrot</td>
							<td>Alice White</td>
							<td>LKR 5500</td>
							<td>18%</td>
							<td>
								<button class="green-btn">Accept</button>
								<button class="red-btn">Reject</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="manage-site-heads-section" class="section" style="display:none;">
				<center>
					<h1>Manage Site Heads</h1>
				</center>
				<br><br>
				<!-- Search and Filter Section -->
				<!-- <div class="filter-section"> -->
				<!-- <input type="text" id="search-bar" placeholder="Search supervisors by name or email">
						<select id="status-filter">
							<option value="">All Status</option>
							<option value="active">Active</option>
							<option value="inactive">Inactive</option>
						</select> -->
				<button class="green-btn" id="add-supervisor-btn">Add Site Head</button>
				<!-- </div> -->
				<!-- Supervisors Table -->
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone Number</th>
							<th>Land ID</th>
							<th>Zone</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="supervisor-list">
						<?php if (!empty($data)): ?>
							<?php foreach ($data as $data): ?>
								<tr data-id="<?= htmlspecialchars($data->id) ?>">
									<td><?= htmlspecialchars($data->name) ?></td>
									<td><?= htmlspecialchars($data->email) ?></td>
									<td><?= htmlspecialchars($data->number) ?> </td>
									<td><?= htmlspecialchars($data->landID) ?></td>
									<td><?= htmlspecialchars($data->zone) ?></td>
									<td>
										<?= $data->status === 0 ? "Active" : "Inactive" ?>
									</td>
									<td>
										<?php if ($data->status === 0): ?>
											<button class="green-btn edit-sitehead-btn">Edit</button>
										<?php else: ?>
											<button class="green-btn edit-sitehead-btn">Edit</button>
											<button class="red-btn"
												onclick="window.location.href='<?php echo ROOT; ?>/Supervisor/Manage_sitehead/delete_sitehead/<?php echo $data->id; ?>';">Remove</button>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="5">No siteheads available.</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
				<!-- Add New Supervisor Button -->
				<br>
				<!-- Supervisor Details Modal -->
				<div id="supervisor-modal" class="modal">
					<div class="modal-content">
						<span class="close-modal">&times;</span>
						<h2>Site Head Details</h2>
						<!-- Supervisor details will be populated dynamically -->
						<div id="supervisor-details"></div>
					</div>
				</div>
				<!-- Add Supervisor Form -->
				<div id="add-supervisor-form" class="modal">
					<div class="modal-content">
						<span class="close-form">&times;</span>
						<h2>Add New Site Head</h2>
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
							<button type="submit">Add Site Head</button>
						</form>
					</div>
				</div>
				<!-- Edit Supervisor Form -->
				<div id="edit-supervisor-form" class="modal">
					<div class="modal-content">
						<span class="close-form">&times;</span>
						<h2>Edit Site Head</h2>
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
							<button type="submit">Update Site Head</button>
						</form>
					</div>
				</div>
			</div>
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
			<div id="manage-issues-section" class="section" style="display:none;">
				<!-- Tab Navigation -->
				<div class="tab-navigation">
					<button class="tab-btn active" onclick="switchTabs('pending-issues')">Pending Issues</button>
					<button class="tab-btn" onclick="switchTabs('solved-issues')">Solved Issues</button>
				</div>
				<!-- Handle Request Tab -->
				<div id="pending-issues" class="tab-content active">
					<!-- <h2>Fertilizer Requests</h2> -->
					<table class="dashboard-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Complaint Type</th>
								<th>Description</th>
								<th>Attachment</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($pendingIssues)): ?>
								<?php foreach ($pendingIssues as $issue): ?>
									<tr>
										<td><?php echo htmlspecialchars($issue->name); ?></td>
										<td><?php echo htmlspecialchars($issue->complaint_type); ?></td>
										<td><?php echo htmlspecialchars($issue->description); ?></td>
										<td>
											<?php if (!empty($issue->attachment)): ?>
												<a href="<?php echo ROOT . '/../app/uploads/' . $issue->attachment; ?>"
													target="_blank" style="text-decoration: none;" class="blue-btn">View</a>
											<?php else: ?>
												No Attachment
											<?php endif; ?>
										</td>
										<td>
											<button class="green-btn"
												onclick="window.location.href='<?php echo ROOT; ?>/Issue/markAsSolved/<?php echo $issue->id; ?>'">Mark
												as Solved</button>
											<button class="red-btn"
												onclick="window.location.href='<?php echo ROOT; ?>/Issue/deleteIssue/<?php echo $issue->id; ?>'">Remove</button>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="5">No Pending Issues Found</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
				<div id="solved-issues" class="tab-content active" style="display:none;">
					<!-- <h2>Fertilizer Requests</h2> -->
					<table class="dashboard-table">
						<thead>
							<tr>
								<th>Name</th>
								<th>Complaint Type</th>
								<th>Description</th>
								<th>Attachment</th>
							</tr>
						</thead>
						<tbody>
							<?php if (!empty($solvedIssues)): ?>
								<?php foreach ($solvedIssues as $sissue): ?>
									<tr>
										<td><?php echo htmlspecialchars($sissue->name); ?></td>
										<td><?php echo htmlspecialchars($sissue->complaint_type); ?></td>
										<td><?php echo htmlspecialchars($sissue->description); ?></td>
										<td>
											<?php if (!empty($sissue->attachment)): ?>
												<a href="<?php echo ROOT . '/../app/uploads/' . $sissue->attachment; ?>"
													target="_blank" style="text-decoration: none;" class="blue-btn">View</a>
											<?php else: ?>
												No Attachment
											<?php endif; ?>
										</td>
									</tr>
								<?php endforeach; ?>
							<?php else: ?>
								<tr>
									<td colspan="5">No Pending Issues Found</td>
								</tr>
							<?php endif; ?>
						</tbody>
					</table>
				</div>
			</div>
			<div id="attendance-section" class="section" style="display:none;">
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Worker Name</th>
							<th>Land ID</th>
							<th>Task</th>
							<th>Date</th>
							<th>Check-In Time</th>
							<th>Check-Out Time</th>
							<th>Total Hours</th>
							<th>Status</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Kamal Silva</td>
							<td>L001</td>
							<td>Rice Planting</td>
							<td style="width: 10%">2024-03-15</td>
							<td>06:30 AM</td>
							<td>03:45 PM</td>
							<td>9.25</td>
							<td data-status="active">Approved</td>
							<td>
								<button class="green-btn">Details</button>
								<button class="blue-btn">Edit</button>
							</td>
						</tr>
						<tr>
							<td>Nimal Fernando</td>
							<td>L003</td>
							<td>Fertilizer Application</td>
							<td>2024-03-15</td>
							<td>07:00 AM</td>
							<td>02:30 PM</td>
							<td>7.50</td>
							<td data-status="active">Approved</td>
							<td>
								<button class="green-btn">Details</button>
								<button class="blue-btn">Edit</button>
							</td>
						</tr>
						<tr>
							<td>Priyantha Gunawardena</td>
							<td>L002</td>
							<td>Crop Inspection</td>
							<td>2024-03-15</td>
							<td>08:15 AM</td>
							<td>04:00 PM</td>
							<td>7.75</td>
							<td data-status="active">Approved</td>
							<td>
								<button class="green-btn">Details</button>
								<button class="blue-btn">Edit</button>
							</td>
						</tr>
						<tr>
							<td>Samantha Jayasinghe</td>
							<td>L004</td>
							<td>Irrigation Maintenance</td>
							<td>2024-03-15</td>
							<td>06:45 AM</td>
							<td>02:15 PM</td>
							<td>7.50</td>
							<td data-status="active">Approved</td>
							<td>
								<button class="green-btn">Details</button>
								<button class="blue-btn">Edit</button>
							</td>
						</tr>
						<tr>
							<td>Rukshan Perera</td>
							<td>L005</td>
							<td>Soil Preparation</td>
							<td>2024-03-15</td>
							<td>05:45 AM</td>
							<td>03:30 PM</td>
							<td>9.75</td>
							<td data-status="active">Approved</td>
							<td>
								<button class="green-btn">Details</button>
								<button class="blue-btn">Edit</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			<div id="event-schedule-section" class="section" style="display:none;">
				<div class="worker-events-container">
					<div class="worker-events-header">
						<h2><i class="fas fa-calendar-check"></i> Today's Events</h2>
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
						</div>
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