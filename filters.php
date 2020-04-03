 <table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table> 
<br/><br/>

 <?php
$str = "<div style='border:1px solid red; width:200px; height: 200px;'>Hello World!</div>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo $str;
?> 
<br/><br/>

 <?php
$int = 100;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?> 


