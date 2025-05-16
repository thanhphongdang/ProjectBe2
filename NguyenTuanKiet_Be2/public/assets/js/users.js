function addUser() {
    alert("Add user clicked!");
  }
  
  function updateUser() {
    alert("Update user clicked!");
  }
  
  function deleteUser(btn) {
    const row = btn.closest("tr");
    if (confirm("Are you sure you want to delete this user?")) {
      row.remove();
    }
  }
  