<!DOCTYPE html>
<html lang="en">
	<head>
   	<title>Lagertha</title>
   	<meta charset="utf-8">
   	<meta http-equiv="X-UA-Compatible" content="IE=edge">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<link rel="stylesheet" href="../css/bootstrap.css" media="screen">
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <script src="../js/bootstrap.min.js"></script>
      <script src="https://use.fontawesome.com/fedba56c13.js"></script>

</head>

    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="../" class="navbar-brand"><img src="/images/lag-logo.png" width="46px"></a>
          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php"><i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a>
            </li>
            <li>
              <a href="host_list.php"><i class="fa fa-desktop" aria-hidden="true"></i> Hosts</a>
            </li>
            <li>
              <a href="groups.php"><i class="fa fa-cubes" aria-hidden="true"></i> Groups</a>
            </li>
            <li>
              <a href="task_list.php"><i class="fa fa-tasks" aria-hidden="true"></i> Active Tasks</a>
            </li>
            <li>
              <a href="logs.php"><i class="fa fa-book" aria-hidden="true"></i> Task Logs</a>
            </li>
             <li>
					<a href="media.php"><i class="fa fa-image" aria-hidden="true"></i> Media</a>          
             </li>
             <li>
             	<a href="settings.php"><i class="fa fa-cog" aria-hidden="true"></i> Settings</a>
             </li>
             <li>
             	<a href="help.php"><i class="fa fa-question-circle" aria-hidden="true"></i> Help</a>
             </li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <?php
            echo "<li><a href=index.php?logout><button type='submit' class='btn btn-xs btn-warning'>Logout, <strong>" . $_SESSION['user_name'] . "</strong></button></a></li>";
      		?>
          </ul>

        </div>
      </div>
    </div>

          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">