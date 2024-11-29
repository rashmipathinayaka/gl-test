document.addEventListener('DOMContentLoaded', () => {
  // Default section and button event listeners
  showSection("dashboard-section");
  setupButtonListeners();
  setupSupervisorManagement();
});

function showSection(sectionId) {
  document.querySelectorAll(".section").forEach(section => {
    section.style.display = section.id === sectionId ? "block" : "none";
  });
}

function setupButtonListeners() {
  // Top bar interactions
  document.querySelector(".notification-btn").addEventListener("click", () => {
    alert("Notifications clicked!");
    // Implement Notification Logic
  });

  // document.querySelector(".profile-btn").addEventListener("click", () => {
  //   alert("Profile clicked!");
  //   // Implement Profile Logic
  // });

  // Fertilizer section buttons
  document.querySelectorAll('#manage-fertilizer-section .green-btn').forEach(button => {
    button.addEventListener("click", () => console.log('Restock Button Clicked!'));
  });

  document.querySelectorAll('#manage-fertilizer-section .blue-btn').forEach(button => {
    button.addEventListener("click", () => console.log('Details Button Clicked!'));
  });

  // Order accept/reject buttons
  document.querySelectorAll(".green-btn").forEach(button => {
    button.addEventListener("click", () => console.log("Green Button Clicked!"));
  });

  document.querySelectorAll(".red-btn").forEach(button => {
    button.addEventListener("click", () => console.log("Red Button Clicked!"));
  });
}

function setupSupervisorManagement() {
  const addSupervisorBtn = document.getElementById("add-supervisor-btn");
  const addSupervisorForm = document.getElementById("add-supervisor-form");
  const closeFormBtns = document.querySelectorAll(".close-form");
  const supervisorForm = document.getElementById("new-supervisor-form");
  const editSupervisorForm = document.getElementById("edit-supervisor-form");

  // Add Supervisor Modal
  addSupervisorBtn.addEventListener("click", () => {
    addSupervisorForm.style.display = "block";
  });

  closeFormBtns.forEach(btn => {
    btn.addEventListener("click", () => {
      addSupervisorForm.style.display = "none";
      editSupervisorForm.style.display = "none";
    });
  });

  // New Supervisor Submission
  supervisorForm.addEventListener("submit", (event) => {
    event.preventDefault();
    const formData = getFormData("name", "email", "phone", "zone", "status");
    
    console.log("New Supervisor Details:", formData);
    
    addSupervisorForm.style.display = "none";
    supervisorForm.reset();
  });

  // Edit Supervisor Functionality
  setupEditSupervisorListeners();
}

function setupEditSupervisorListeners() {
  document.querySelectorAll(".edit-btn").forEach((button) => {
    button.addEventListener("click", (event) => {
      const supervisorId = event.target.getAttribute("data-id");
      const row = document.querySelector(`tr[data-id='${supervisorId}']`);
      
      const supervisorDetails = {
        name: row.children[0].textContent,
        email: row.children[1].textContent,
        phone: row.children[2].textContent,
        zone: row.children[3].textContent,
        status: row.children[4].textContent
      };

      populateEditForm(supervisorDetails, supervisorId);
    });
  });

  // Edit Form Submission
  document.getElementById("edit-supervisor-form").addEventListener("submit", (event) => {
    event.preventDefault();
    const supervisorId = document.getElementById("edit-supervisor-id").value;
    const formData = getFormData("edit-name", "edit-email", "edit-phone", "edit-zone", "edit-status");
    
    updateSupervisorRow(supervisorId, formData);
    
    document.getElementById("edit-supervisor-form").style.display = "none";
    event.target.reset();
  });
}

function getFormData(...fieldIds) {
  return fieldIds.reduce((data, fieldId) => {
    data[fieldId.replace('edit-', '')] = document.getElementById(fieldId).value;
    return data;
  }, {});
}

function populateEditForm(details, supervisorId) {
  Object.entries(details).forEach(([key, value]) => {
    document.getElementById(`edit-${key}`).value = value;
  });
  
  document.getElementById("edit-supervisor-id").value = supervisorId;
  document.getElementById("edit-supervisor-form").style.display = "block";
}

function updateSupervisorRow(supervisorId, details) {
  const row = document.querySelector(`tr[data-id='${supervisorId}']`);
  Object.entries(details).forEach(([key, value], index) => {
    row.children[index].textContent = value;
  });
}

function switchTab(tabName) {
  // Hide all fertilizer tab contents
  document.querySelectorAll('#manage-fertilizer-section .tab-content').forEach(content => {
    content.style.display = 'none';
  });

  // Remove active class from all tab buttons
  document.querySelectorAll('#manage-fertilizer-section .tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });

  // Show selected tab content
  document.getElementById(tabName).style.display = 'block';
  event.currentTarget.classList.add('active');
}

function switchTabs(tabName) {
  // Hide all fertilizer tab contents
  document.querySelectorAll('#manage-issues-section .tab-content').forEach(content => {
    content.style.display = 'none';
  });

  // Remove active class from all tab buttons
  document.querySelectorAll('#manage-issues-section .tab-btn').forEach(btn => {
    btn.classList.remove('active');
  });

  // Show selected tab content
  document.getElementById(tabName).style.display = 'block';
  event.currentTarget.classList.add('active');
}