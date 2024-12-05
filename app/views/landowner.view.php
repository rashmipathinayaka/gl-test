<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Landowner Dashboard</title>
	<link rel="stylesheet" href="<?= ROOT ?>/assets/css/landowner.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<script src="<?= ROOT ?>/assets/js/landowner.js" defer></script>
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
				<li><a onclick="showSection('register-lands-section')">Register a Land</a></li>
				<li><a onclick="showSection('manage-lands-section')">Manage Lands</a></li>
				<li><a href="<?= ROOT ?>/marketplace">Marketplace</a></li>
			</ul>
			<ul class="logout">
			<li><a href="<?= ROOT ?>/login/logout">Log Out</a></li>
			</ul>
		</div>
		<div class="content">
			<div id="dashboard-section" class="section">
				<div class="metric-grid">
					<div class="metric-card">
						<h2>Total Lands</h2>
						<div class="metric-content">
							<span class="metric-value">5</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-lands-section')">View</button>
					</div>
					<div class="metric-card">
						<h2>Ongoing Projects</h2>
						<div class="metric-content">
							<span class="metric-value">3</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-lands-section')">View</button>
					</div>
					<div class="metric-card">
						<h2>Completed Projects</h2>
						<div class="metric-content">
							<span class="metric-value">1</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-lands-section')">View</button>
					</div>
					<div class="metric-card">
						<h2>Unused Lands</h2>
						<div class="metric-content">
							<span class="metric-value">1</span>
							<i class="fas fa-user"></i>
						</div>
						<button onclick="showSection('manage-lands-section')">View</button>
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
			<!-- register lands -->
			<div id="register-lands-section" class="section" style="display:none;">
				<div class="form-container">
					<h1 class="register-topic">Register Your Land</h1>
					<br>
					<form class="form" action="<?= ROOT ?>/Landowner/registerland" method="POST"
						enctype="multipart/form-data">
						<div class="form-group">
							<label for="address">Address of the Land</label>
							<input type="text" id="address" name="address" required="">
							<label for="size">Size of the Land (In Sqm)</label>
							<input type="number" id="size" name="size" required="">
							<label for="duration">Time Period for the Lease (In Years)</label>
							<input type="number" id="duration" name="duration" required="">
							<label for="crop">Prefered Crop Type</label>
							<select id="cropType" name="crop" required>
								<option value="" disabled selected>Select a Crop Type</option>
								<option value="Rice">Rice</option>
								<option value="Wheat">Wheat</option>
								<option value="Maize">Maize</option>
								<option value="Potatoes">Potatoes</option>
								<option value="Tomatoes">Tomatoes</option>
								<option value="Onions">Onions</option>
								<option value="Coffee">Coffee</option>
								<option value="Sugarcane">Sugarcane</option>
							</select>
							<label for="doc">Upload a Legal Document of the Land</label>
							<input type="file" id="document" name="document" required>
							<h6>You Cannot Change the Details Again</h6>
							<button class="form-submit-btn" type="submit">
								<i class="fas fa-paper-plane"></i>&nbsp;Submit</button>
						</div>
					</form>
				</div>
			</div>
			<div id="manage-lands-section" class="section" style="display:none;">
				<h2>Please Note That You Can Only Remove Unused Lands</h2>
				<br>
				<!-- lands Table -->
				<table class="dashboard-table">
					<thead>
						<tr>
							<th>Land ID</th>
							<th>Address</th>
							<th>Size</th>
							<th>Crop Type</th>
							<th>Document</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="supervisor-list">
						<?php if (!empty($lands)): ?>
							<?php foreach ($lands as $land): ?>
								<tr $land-id="<?= htmlspecialchars($land->id) ?>">
									<td><?= htmlspecialchars($land->id) ?></td>
									<td><?= htmlspecialchars($land->address) ?></td>
									<td><?= htmlspecialchars($land->size) ?> Sqm</td>
									<td><?= htmlspecialchars($land->crop) ?></td>
									<td>
										<?php if (!empty($land->document)): ?>
											<a href="<?php echo ROOT . '/../app' . $land->document; ?>" target="_blank"
												style="text-decoration: none; color:white;" class="blue-btn">View</a>
										<?php else: ?>
											No Attachment
										<?php endif; ?>
									</td>
									<td>
										<?= $land->status === 1 ? "Active" : "Inactive" ?>
									</td>
									<td>
										<?php if ($land->status === 0): ?>
											<button class="red-btn"
												onclick="window.location.href='<?= ROOT ?>/Landowner/deleteland/<?php echo $land->id; ?>';">Remove</button>
										<?php else: ?>
											<button class="green-btn">View</button>
										<?php endif; ?>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php else: ?>
							<tr>
								<td colspan="5">No lands available.</td>
							</tr>
						<?php endif; ?>
					</tbody>
				</table>
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
</body>

</html>