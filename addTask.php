<?php include("request/classtask.php");

  $task = $_POST['taskname'];
  $idlist = $_POST['idlist'];
  $done = 0;
  $taskclass = new tasks();

  if(isset($task))
  {
    if(isset($_POST["valide"]))
    {
      $taskclass->AddTask($task,$idlist,$done);
    }
  }
?>
