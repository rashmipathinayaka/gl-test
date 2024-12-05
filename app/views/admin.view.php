<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="<?= ROOT ?>/assets/js/admin.js" defer></script>
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
                <li><a onclick="showSection('manage-bids-section')">Manage Bids</a></li>
                <li><a onclick="showSection('manage-supervisors-section')">Manage Supervisors</a></li>
                <li><a onclick="showSection('manage-site-heads-section')">Manage Site Heads</a></li>
                <li><a onclick="showSection('manage-workers-section')">Manage Workers</a></li>
                <li><a onclick="showSection('manage-lands-section')">Manage Lands</a></li>
                <!-- <li><a onclick="showSection('site-visits-section')">Site Visits</a></li> -->
                <li><a onclick="showSection('inquiries-section')">Inquiries</a></li>
            </ul>
            <ul class="logout">
                <li><a href="<?= ROOT ?>/login/logout">Log Out</a></li>
            </ul>
        </div>

        <div class="content">
            <div id="dashboard-section" class="section">
                <div class="metric-grid">
                    <div class="metric-card">
                        <h3>Registered Lands</h3>
                        <div class="metric-content">
                            <span class="metric-value">27</span>
                            <i class="fas fa-seedling"></i>
                        </div>
                        <button onclick="showSection('manage-lands-section')">View</button>
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
                </div>

                <center>
                    <h1>Pending Approvals</h1>
                </center>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Land ID</th>
                            <th>Location</th>
                            <th>Crop Type</th>
                            <th>Lease Duration</th>
                            <th>Field Visit Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>16/1, Uyana road, Moratuwa</td>
                            <td>Rice</td>
                            <td>1 Year</td>
                            <td>2024-09-20</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>220, Hill Street, Panadura</td>
                            <td>Potato</td>
                            <td>6 Months</td>
                            <td>2024-09-23</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

            <!-- Manage Bids Section -->
            <div id="manage-bids-section" class="section" style="display:none;">
                <center>
                    <h1>Manage Bids</h1>
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
                            <td>1</td>
                            <td>Rice</td>
                            <td>John Perera</td>
                            <td>LKR 5000</td>
                            <td>20%</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Maize</td>
                            <td>Jane Smith</td>
                            <td>LKR 4500</td>
                            <td>25%</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Wheat</td>
                            <td>Michael Silva</td>
                            <td>LKR 6000</td>
                            <td>30%</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Potato</td>
                            <td>Kamal Davis</td>
                            <td>LKR 4000</td>
                            <td>15%</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Tomato</td>
                            <td>Chrishantha Mendis</td>
                            <td>LKR 3500</td>
                            <td>10%</td>
                            <td>
                                <button class="green-btn">Accept</button>
                                <button class="red-btn">Reject</button>
                            </td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Rice</td>
                            <td>Ali Rizwan</td>
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

            <div id="manage-supervisors-section" class="section" style="display:none;">
                <center>
                    <h1>Manage Supervisors</h1>
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
                    <button class="green-btn" id="add-supervisor-btn">Add Supervisor</button>
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
                                <button class="red-btn">Activate</button>
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
                                <button class="red-btn">Activate</button>
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
                        <h2>Supervisor Details</h2>
                        <!-- Supervisor details will be populated dynamically -->
                        <div id="supervisor-details"></div>
                    </div>
                </div>

                <!-- Add Supervisor Form -->
                <div id="add-supervisor-form" class="modal">
                    <div class="modal-content">
                        <span class="close-form">&times;</span>
                        <h2>Add New Supervisor</h2>
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
                            <button type="submit">Add Supervisor</button>
                        </form>
                    </div>
                </div>

                <!-- Edit Supervisor Form -->
                <div id="edit-supervisor-form" class="modal">
                    <div class="modal-content">
                        <span class="close-form">&times;</span>
                        <h2>Edit Supervisor</h2>
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
                            <button type="submit">Update Supervisor</button>
                        </form>
                    </div>
                </div>

            </div>

            <div id="manage-site-heads-section" class="section" style="display:none;">
                <center>
                    <h1>Manage Site Heads</h1>
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
                    <button class="green-btn" id="add-supervisor-btn">Add Site Head</button>
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
                                <button class="red-btn">Activate</button>
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
                                <button class="red-btn">Activate</button>
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
                                <button class="red-btn">Activate</button>
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
                                <button class="red-btn">Activate</button>
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

            <div id="manage-lands-section" class="section" style="display:none;">
                <center>
                    <h1>Manage Lands</h1>
                </center>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Land ID</th>
                            <th>Address</th>
                            <th>Size</th>
                            <th>Crop Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (!empty($lands)): ?>
                            <?php foreach ($lands as $land): ?>
                                <tr data-id="<?= htmlspecialchars($land->id) ?>">
                                    <td><?php echo htmlspecialchars($land->id); ?></td>
                                    <td><?php echo htmlspecialchars($land->address); ?></td>
                                    <td><?php echo htmlspecialchars($land->size); ?></td>
                                    <td><?php echo htmlspecialchars($land->crop); ?></td>
                                    <td>
                                        <?= $land->status === 0 ? "Pending" : "Approved" ?>
                                    </td>
                                    <td>
                                        <?php if ($land->status === 0): ?>
                                            <button class="green-btn"
                                                onclick="window.location.href='<?php echo ROOT; ?>/Admin/updateland/<?php echo $land->id; ?>';">Approve</button>
                                        <?php else: ?>
                                            <button class="blue-btn" style="color:white">View</button>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6">No Lands Available</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>

            <div id="site-visits-section" class="section" style="display:none;">
                <h1>Section 5 Content</h1>
                <!-- Add content for Section 5 -->
            </div>

            <div id="inquiries-section" class="section" style="display:none;">
                <div class="tab-navigation">
                    <button class="tab-btn active" onclick="switchTab('pending-inquiries')">Pending Inquiries</button>
                    <button class="tab-btn" id="solved-issues-btn" onclick="switchTab('solved-inquiries')">Solved
                        Inquiries</button>
                </div>

                <div id="pending-inquiries" class="tab-content active">
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="supervisor-list">
                            <?php if (!empty($pendingInquiries)): ?>
                                <?php foreach ($pendingInquiries as $inquiry): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($inquiry->name); ?></td>
                                        <td><?php echo htmlspecialchars($inquiry->email); ?></td>
                                        <td><?php echo htmlspecialchars($inquiry->subject); ?></td>
                                        <td><?php echo htmlspecialchars($inquiry->message); ?></td>
                                        <td>
                                            <button class="green-btn"
                                                onclick="window.location.href='<?php echo ROOT; ?>/Inquiry/markAsSolved/<?php echo $inquiry->id; ?>'">Mark
                                                as Solved</button>
                                            <button class="red-btn"
                                                onclick="window.location.href='<?php echo ROOT; ?>/Inquiry/deleteInquiry/<?php echo $inquiry->id; ?>'">Remove</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">No Pending Inquiries Found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

                <div id="solved-inquiries" class="tab-content active" style="display:none;">
                    <table class="dashboard-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                            </tr>
                        </thead>
                        <tbody id="supervisor-list">
                            <?php if (!empty($solvedInquiries)): ?>
                                <?php foreach ($solvedInquiries as $sinquiry): ?>
                                    <tr>
                                        <td><?php echo htmlspecialchars($sinquiry->name); ?></td>
                                        <td><?php echo htmlspecialchars($sinquiry->email); ?></td>
                                        <td><?php echo htmlspecialchars($sinquiry->subject); ?></td>
                                        <td><?php echo htmlspecialchars($sinquiry->message); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">No Solved Inquiries Found</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
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