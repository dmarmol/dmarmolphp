<?php
$db = mysqli_connect('localhost', 'root', 'root') or 
    die ('Unable to connect. Check your connection parameters.');
mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

if ($_GET['action'] == 'edit') {
    //retrieve the record's information 
    $query = 'SELECT
            people_fullname, people_isactor, people_isdirector
        FROM
            people
        WHERE
            people_id = ' . $_GET['id'];
    $result = mysqli_query($db, $query) or die(mysqli_error($db));
    extract(mysqli_fetch_assoc($result));
} else {
    //set values to blank
    $people_fullname = '';
    $people_isactor = 0;
    $people_isdirector = 0;
}

?>
<html>
  <head>
  <title><?php echo ucfirst($_GET['action']); ?> People</title>
  </head>
<body>

  <?php
  switch ($_GET['action']) {
    case 'add':
    echo "Estas añadiendo muchacho!!";
    break;
    case 'edit':
    echo "Estas editando muchacho!!";
    break;
  }
  ?>
<form action="commit.php?action=<?php echo $_GET['action']; ?>&type=people"method="post">
  <table>
    <tr>
      <td>People Name</td>
      <td>
      <input type="text" name="people_fullname"value="<?php echo $people_fullname; ?>"/></td>
    </tr>
    <tr>
      <td>Es actor</td>
      <td>
        <select name="people_isactor">
          <option value="0">0</option>
          <option value="1">1</option>
        </select>
      </td>
    <tr>
      <td>Director</td>
    <td>
    <select name="people_isdirector">
      <option value="0">0</option>
      <option value="1">1</option>
    </select>
    </td>

<td colspan="2" style="text-align: center;">
<?php
if ($_GET['action'] == 'edit') {
    echo '<input type="hidden" value="' . $_GET['id'] . '" name="people_id" />';
}
?>
      <input type="submit" name="submit"
       value="<?php echo ucfirst($_GET['action']); ?>" />
     </td>
    </tr>
   </table>
  </form>
 </body>
</html>
