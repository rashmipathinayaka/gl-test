<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buyer Dashboard</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/buyer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="<?= ROOT ?>/assets/js/buyer.js" defer></script>
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
                <li><a onclick="showSection('purchase-history-section')">Purchase History</a></li>
                <li><a onclick="showSection('file-a-complaint-section')">File a Complaint</a></li>
                <li><a href="<?= ROOT ?>/marketplace">Marketplace</a></li>
            </ul>
            <ul class="logout">
                <li><a href="/gl/logout.php">Log Out</a></li>
            </ul>
        </div>

        <div class="content">
            <div id="dashboard-section" class="section">
                <div class="metric-grid">
                    <div class="metric-card">
                        <h3>Heading 1</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 1</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 2</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 2</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 3</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 3</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                    <div class="metric-card">
                        <h3>Heading 4</h3>
                        <div class="metric-content">
                            <span class="metric-value">Value 4</span>
                            <i class="fas fa-user"></i>
                        </div>
                        <button>View</button>
                    </div>
                </div>

                <center>
                    <h1>Pending Payments</h1>
                </center>
                <table class="dashboard-table">
                    <thead>
                        <tr>
                            <th>Purchase Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2021-10-10</td>
                            <td>LKR 25 000</td>
                            <td>Pending Payment</td>
                            <td>
                                <button class="green-btn">Pay</button>
                                <button class="red-btn">Cancel Order</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2024-10-10</td>
                            <td>LKR 42 000</td>
                            <td>Pending Payment</td>
                            <td>
                                <button class="green-btn">Pay</button>
                                <button class="red-btn">Cancel Order</button>
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
                            <th>Bidding Amount</th>
                            <th>Percentage of the Harvest</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>Tea</td>
                            <td>$5,000</td>
                            <td>25%</td>
                            <td>Approved</td>
                            <td>
                                <button class="blue-btn">View Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Coffee</td>
                            <td>$7,500</td>
                            <td>30%</td>
                            <td>Pending</td>
                            <td>
                                <button class="blue-btn">View Details</button>
                                <button class="red-btn">Remove Bid</button>
                            </td>
                        </tr>
                        <tr>
                            <td>103</td>
                            <td>Maize</td>
                            <td>$3,200</td>
                            <td>20%</td>
                            <td>Approved</td>
                            <td>
                                <button class="blue-btn">View Details</button>
                            </td>
                        </tr>
                        <tr>
                            <td>104</td>
                            <td>Rice</td>
                            <td>$4,800</td>
                            <td>18%</td>
                            <td>Pending</td>
                            <td>
                                <button class="blue-btn">View Details</button>
                                <button class="red-btn">Remove Bid</button>
                            </td>
                        </tr>
                        <tr>
                            <td>105</td>
                            <td>Coconut</td>
                            <td>$6,000</td>
                            <td>22%</td>
                            <td>Rejected</td>
                            <td>
                                <button class="blue-btn">View Details</button>
                                <button class="red-btn">Remove Bid</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="purchase-history-section" class="section" style="display:none;">
                <center>
                    <h1>Purchase History</h1>
                </center>

                <!-- Search and Filter Section -->
                <!-- <div class="filter-section">
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
                            <th>Purchase Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="supervisor-list">
                        <tr data-id="1">
                            <td>2023-10-01</td>
                            <td>LKR 24 000</td>
                            <td>Processing</td>
                            <td>
                                <button class="green-btn" data-id="1">View Invoice</button>
                                <button class="blue-btn">Download Invoice</button>
                            </td>
                        </tr>
                        <tr data-id="2">
                            <td>2023-04-12</td>
                            <td>LKR 31 000</td>
                            <td>Delivered</td>
                            <td>
                                <button class="green-btn" data-id="2">View Invoice</button>
                                <button class="blue-btn">Download Invoice</button>
                            </td>
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
                                    <option value="product-quality">Product Quality Issue</option>
                                    <option value="payment-billing">Payment/Billing Issues</option>
                                    <option value="customer-service">Customer Service Experience</option>
                                    <option value="product-description">Product Description Mismatch</option>
                                    <option value="return-refund">Return/Refund Issues</option>
                                    <option value="shipping">Shipping Delays/Damage</option>
                                    <option value="pricing">Pricing Disputes</option>
                                    <option value="order-cancellation">Order Cancellation Problems</option>
                                    <option value="technical-issues">Website/App Technical Issues</option>
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