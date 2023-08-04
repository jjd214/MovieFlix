<?php
class view extends config {

    public function admin_table() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `user_tbl` WHERE `access` = 'admin'");
        $stmt->execute();
        $data = $stmt->fetchAll();

        echo "<h3 style='color: white; margin-top: 15px; padding-bottom: 10px; text-align: center; font-family: Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;'> ADMIN LIST </h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
                <tr>
                    <th> ID </th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>GENDER</th>
                    <th>AGE</th>
                    <th>DATE OF BIRTH</th>
                    <th>ACCESS</th>
                    <th>ACTION</th>
                </tr>
              </thead><tbody>";

        foreach($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[gender]</td>";
           echo "<td>$datas[age]</td>";
           echo "<td>$datas[dob]</td>";
           echo "<td>$datas[access]</td>";
           echo "<td>
                  <a class='btn btn-info btn-sm' href='view_details.php?edit=$datas[id]'>View</a>
                </td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
    }
    public function user_table() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("SELECT * FROM `user_tbl` WHERE `access` = 'user'");
        $stmt->execute();
        $data = $stmt->fetchAll();

        echo "<h3 style='color: white; margin-top: 15px; padding-bottom: 10px; text-align: center; font-family: Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;'> USER LIST </h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
                <tr>
                    <th> ID </th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>GENDER</th>
                    <th>AGE</th>
                    <th>DATE OF BIRTH</th>
                    <th>ACCESS</th>
                    <th>ACTION</th>
                </tr>
              </thead><tbody>";

        foreach($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[gender]</td>";
           echo "<td>$datas[age]</td>";
           echo "<td>$datas[dob]</td>";
           echo "<td>$datas[access]</td>";
           echo "<td>
                  <a class='btn btn-info btn-sm' href='view_details.php?edit=$datas[id]'>VIEW</a>
                </td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
    }
    public function author_table() {
      $connection = $this->openConnection();
      $stmt = $connection->prepare("SELECT * FROM `author_tbl`");
      $stmt->execute();
      $data = $stmt->fetchAll();

      echo "<h3 style='color: white; margin-top: 15px; padding-bottom: 10px; text-align: center; font-family: Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;'> AUTHORS LIST </h3>";
        echo "<table class='table table-dark table-striped table-sm'>";
        echo "<thead>
                <tr>
                    <th> ID </th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>GENDER</th>
                    <th>MOVIE NAME</th>
                    <th>ACTION</th>
                </tr>
              </thead><tbody>";

        foreach($data as $datas) {
           echo "<tr>";
           echo "<td>$datas[id]</td>";
           echo "<td>$datas[firstname]</td>";
           echo "<td>$datas[lastname]</td>";
           echo "<td>$datas[gender]</td>";
           echo "<td>$datas[movie_name]</td>";
           echo "<td>
                  <a class='btn btn-info btn-sm' href='view_author_details.php?edit=$datas[id]'>VIEW</a>
                </td>";
           echo "</tr>";
         }
        echo "</tbody></table>";
    }
}
?>