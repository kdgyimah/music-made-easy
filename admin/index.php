<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Modern Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>A<span>dmin</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">

            </div>

            <div class="side-menu">
                <ul>
                <li>
                       <a href="../admin/index.php" class="active">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                    <li>
                       <a href="../admin/users.php">
                            <span class="las la-user-alt"></span>
                            <small>Users</small>
                        </a>
                    </li>
                    <li>
                       <a href="../admin/add_admin.php">
                            <span class="las la-user-alt"></span>
                            <small>Add Admin</small>
                        </a>
                    </li>
                    <li>
                       <a href="../admin/admin_login.php">
                            <span></span>
                            <small>Logout</small>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    
                    
                    
                    

                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Admin / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <br>
                        <div class="card-head">
                            <h2>Users</h2>
                            <span class="las la-user-friends"></span>
                        </div>
                        <div class="card-progress">
                            <small></small>
                            
                        </div>
                    </div>

                    <div class="card">
                        <br>
                        <div class="card-head">
                            <h2>Music</h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small></small>
                            
                        </div>
                    </div>

                    
                </div>

                <?php


?>
                

                </div>
            
            </div>
            
        </main>
        
    </div>
</body>
</html>