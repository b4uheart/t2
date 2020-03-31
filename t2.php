<?php
   
  /**
   * @author lionaneesh
   * @copyright 2011
   * @page upload.php
   */
   
  // If the upload request has been made , Upload the file
   
  $uploadMessage = "";
   
  if (isset($_POST['upload']))
  {
        $path = $_FILES['uploadFile']['name'];
        if(move_uploaded_file($_FILES['uploadFile']['tmp_name'],$path) == TRUE)
        {
              $uploadMessage = "File Uploaded <a href='$path'>HERE</a>";
        }
  }
   
  ?>
   
  <html>
   
  <head>
   
      <title>Welcome to Vulnerable Apps</title>
   
  </head>
   
  <body>
   
  <h1>Arbitary file upload ( POC )</h1>
  <hr />
   
  <p>Hey all this is a sample php script to upload image files , This script doesn't contains file type checking code which makes it prone to Arbitary file upload vulnerbility. </p>
   
  <hr />
  <h2>Upload</h2>
  <hr />
   
  <table>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
      <tr>
      
          <td width="100">Upload File </td>
          <td width="380"><input class="cmd" type="file" name="uploadFile"/></td>
          <td><input style="margin-left:20px;" type="submit" name="upload" class="own" value="Upload"/></td>
      
      </tr>
  </form>
  </table>
  <?php
   
  echo $uploadMessage;
   
  ?>
   
  </body>

<h1>rahul<h1/>
<?php
$result=shell_exec("cd && ls");
echo "<pre>".$result."</pre>";
?>
