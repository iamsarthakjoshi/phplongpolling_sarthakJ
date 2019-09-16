<?php if( !empty($_SESSION['username']) && $_SESSION['role'] == "Staff"): ?>
<div class="container">
  <div class="row">
    <!-- Page Heading -->
    <h1 class="page-header" style="color: #fff;"><strong>Dashboard</strong></h1>

    <div class="form-box" style="margin-top: 40px;">
      <div class="col-md-3">
        <div class="form-top">
          <div class="form-top-left">
            <h3>Admin</h3>
            <p>Add User</p>
          </div>
          <div class="form-top-right">
            <i class="fa fa-pencil"></i>
          </div>
        </div>

        <div class="form-bottom" id="form-bottom">
          <div class="list-group">
            <a href="<?php echo $config['base_url']; ?>index.php?action=list_users" class="list-group-item">List Users</a>
            <a href="<?php echo $config['base_url']; ?>index.php?action=add_user" class="list-group-item active">Add User</a>
            <a href="<?php echo $config['base_url']; ?>index.php?action=list_files" class="list-group-item">List Files/Notice</a>
            <a href="<?php echo $config['base_url']; ?>index.php?action=upload" class="list-group-item">Upload Files/Notice</a>
            <a href="<?php echo $config['base_url']; ?>index.php?action=delete_messages" class="list-group-item">Delete Messages</a>
          </div>
        </div>
      </div>

      <div class="col-lg-9">
        <div class="form-top">
          <div class="form-top-left">
            <h3>Add a new user's details</h3>
            <p>Set users active or inactive per the need.</p>
          </div>
          <div class="form-top-right">
            <i class="fa fa-pencil"></i>
          </div>
        </div>

        <div class="form-bottom">
          <form method="post" action="<?php echo $config['base_url'];?>index.php?action=controller/controller" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label" for="username">Username</label>
              <input type="text" name="username" placeholder="Username" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="fullname">Password</label>
              <input type="pasword" name="password" placeholder="Password" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="fullname">Role</label>
              <input type="text" name="role" placeholder="Role" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="fullname">Fullname</label>
              <input type="text" name="fullname" placeholder="Fullname" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="email">Email ID</label>
              <input type="text" name="email_id" placeholder="Email Id" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="semester">Semester</label>
              <input type="text" name="semester" placeholder="Semester" class="form-first-name form-control" id="form-first-name" required>
            </div>

            <div class="form-group">
              <label class="control-label" for="description">Description</label>
              <textarea class="form-control noresize" name="description" rows="8" placeholder="Description here..." style="width:100%;" required></textarea>
            </div>

            <div class="form-group">
              <label class="control-label" for="form-first-name">Active</label>
              <select name="set_active">
                  <option value="1">1</option>
                  <option value="0">0</option>
              </select>
            </div>

            <button type="submit" class="btn" name="addUser">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php else: ?>
    <div class="alert alert-danger" >Please login to access dashboard. <a href="<?php echo $config['base_url']; ?>index.php?action=login">Login here</a></div>
<?php endif; ?>
