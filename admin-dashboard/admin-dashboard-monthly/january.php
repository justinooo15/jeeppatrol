<?php
   $link = mysql_connect('localhost', 'root', '')
                or die('Could not connect: ' . mysql_error());
        mysql_select_db('jeep') or die('Could not select database');

?>
<!--Smoking -->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
       $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke1[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke2[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke3[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke4[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke5[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke6[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke7[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke8[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke9[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke10[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke11[] = $row["smoke"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'smoke' FROM tbl_posts WHERE violation LIKE '%Smoking%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $smoke12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $smoke12[] = $row["smoke"];
        }
    }
?>

<!-- Illegal U Turn -->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn1[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $utun2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn2[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn3[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn4[] = $row["uturn"];
        }
    }
?>

<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn5[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn6[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn7[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn8[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn9[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn10[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn11[] = $row["uturn"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uturn' FROM tbl_posts WHERE violation LIKE '%Illegal U turn%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uturn12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uturn12[] = $row["uturn"];
        }
    }
?>

<!-- Discourteous disrespectful conduct to passenger -->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful1[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful2[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful3[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful4[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful5[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful6[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful7[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful8[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful9[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful10[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful11[] = $row["disrespectful"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disrespectful' FROM tbl_posts WHERE violation LIKE '%Disrespectful conduct to passenger%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disrespectful12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disrespectful12[] = $row["disrespectful"];
        }
    }
?>



<!-- Disobedience to the traffic officer -->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
      $disobedience = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience1[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience2[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience3[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience4[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience5[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience6[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience7[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience8[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience9[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience10[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience11[] = $row["disobedience"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disobedience' FROM tbl_posts WHERE violation LIKE '%Disobedience to the traffic officer%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disobedience12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disobedience12[] = $row["disobedience"];
        }
    }
?>




<!--Disregarding traffic sign or signal-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding1[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding2[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding3[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding4[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding5[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding6[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding7[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding8[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding9[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding10[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding11[] = $row["disregarding"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'disregarding' FROM tbl_posts WHERE violation LIKE '%Disregarding traffic sign or signal%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $disregarding12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $disregarding12[] = $row["disregarding"];
        }
    }
?>




<!--Driving under the influence of liquor-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor1[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor2[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor3[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor4[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor5[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor6[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor7[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor8[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor9[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor10[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor11[] = $row["liquor"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'liquor' FROM tbl_posts WHERE violation LIKE '%Driving under the influence of liquor%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $liquor12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $liquor12[] = $row["liquor"];
        }
    }
?>




<!--Loading and unloading at the middle of the street-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading1[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading2[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading3[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading4[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading5[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading6[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading7[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading8[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading9[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading10[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading11[] = $row["loading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'loading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the middle of the street%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $loading12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $loading12[] = $row["loading"];
        }
    }
?>



<!--Loading and unloading at the street corner-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading1[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading2[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading3[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading4[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading5[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading6[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading7[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading8[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading9[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading10[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading11[] = $row["unloading"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'unloading' FROM tbl_posts WHERE violation LIKE '%Loading and unloading at the street corner%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $unloading12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $unloading12[] = $row["unloading"];
        }
    }
?>






<!--Refusal of convey passenger-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal1[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal2[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal3[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal4[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal5[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal6[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal7[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal8[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal9[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal10[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal11[] = $row["refusal"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'refusal' FROM tbl_posts WHERE violation LIKE '%Refusal of convey passenger%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $refusal12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $refusal12[] = $row["refusal"];
        }
    }
?>





<!--Non wearing of proper current identification card-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification1[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification2[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification3[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification4[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification5[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification6[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification7[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification8[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification9[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification10[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification11[] = $row["identification"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'identification' FROM tbl_posts WHERE violation LIKE '%Non wearing of proper current identification card%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $identification12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $identification12[] = $row["identification"];
        }
    }
?>



<!--Non posting of current passenger fare-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare1[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare2[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare3[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare4[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare5[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare6[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare7[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare8[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare9[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare10[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare11[] = $row["fare"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'fare' FROM tbl_posts WHERE violation LIKE '%Non posting of current passenger fare%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $fare12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $fare12[] = $row["fare"];
        }
    }
?>



<!--No uniform-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform1[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform2[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform3[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform4[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform5[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform6[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform7[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform8[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform9[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform10[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform11[] = $row["uniform"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'uniform' FROM tbl_posts WHERE violation LIKE '%No uniform%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $uniform12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $uniform12[] = $row["uniform"];
        }
    }
?>



<!--Obstruction to traffic-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction1[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction2[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction3[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction4[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction5[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction6[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction7[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction8[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction9[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction10[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction11[] = $row["obstruction"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'obstruction' FROM tbl_posts WHERE violation LIKE '%Obstruction to traffic%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $obstruction12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $obstruction12[] = $row["obstruction"];
        }
    }
?>






<!--Over charging of fare-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging1[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging2[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging3[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging4[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging5[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging6[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging7[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging8[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging9[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging10[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging11[] = $row["charging"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'charging' FROM tbl_posts WHERE violation LIKE '%Over charging of fare%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $charging12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $charging12[] = $row["charging"];
        }
    }
?>






<!--Over loading-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over[] = $row["over"];
        }
    }
?>

<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over1[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over2[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over3[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over4[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over5[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over6[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over7[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over8[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over9[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over10[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over11[] = $row["over"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'over' FROM tbl_posts WHERE violation LIKE '%Over loading%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $over12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $over12[] = $row["over"];
        }
    }
?>




<!--Trip cutting-->
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting1[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting2[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting3[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting4[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting5[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting6[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting7[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting8[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting9[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting10[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting11[] = $row["cutting"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cutting' FROM tbl_posts WHERE violation LIKE '%Trip cutting%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cutting12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cutting12[] = $row["cutting"];
        }
    }
?>





<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-01-01' AND '2017-01-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone1 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone1[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-02-01' AND '2017-02-29'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone2 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone2[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-03-01' AND '2017-03-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone3 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone3[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-04-01' AND '2017-04-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone4 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone4[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-05-01' AND '2017-05-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone5 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone5[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-06-01' AND '2017-06-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone6 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone6[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-07-01' AND '2017-07-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone7 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone7[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-08-01' AND '2017-08-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone8 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone8[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-09-01' AND '2017-09-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone9 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone9[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-10-01' AND '2017-10-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone10 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone10[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-11-01' AND '2017-11-30'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone11 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone11[] = $row["cellphone"];
        }
    }
?>
<?php
        $sql = "SELECT post_id, COUNT(*) AS 'cellphone' FROM tbl_posts WHERE violation LIKE '%Use cellphone while driving%' AND date_time BETWEEN '2017-12-01' AND '2017-12-31'";
        $result = mysql_query($sql) or die('Query failed: ' . mysql_error());
      if ($result) {
        $cellphone12 = array();
        while ($row = mysql_fetch_assoc($result)) {
            $cellphone12[] = $row["cellphone"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <title></title>

    <link rel="shortcut icon" href="#" type="image/x-icon">
    <link rel="icon" href="#" type="image/x-icon">
    
    <link rel="stylesheet" href="/library/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/library/css/style.css">

    <script src="/js/charts/Chart.js"></script>
    <script src="/js/charts/Chart.min.js"></script>

</head>

<body>
    <div class="sec">
    <div id="navbar-wrapper">
        <header>
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo">
                            <a href="/" class="imglog"><img src="/library/images/jeep_logo.jpg" class="logo__images" alt=""></a>
                            <a href="/" class="imgtxt"><img src="/library/images/logo_text.png" class="logo__text" alt=""></a>
                        </div>
                    </div>
                    <div id="navbar-collapse" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="headnav"><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                            <li class="headnav"><a href="admin-userprofile.php"><i class="fa fa-users"></i>User Profiles</a></li>
                            <li class="headnav"><a href=""><i class="fa fa-plus" aria-hidden="true"></i>Add Drivers</a></li>
                            <li class="headnav"><a href=""><i class="fa fa-list" aria-hidden="true"></i>List of reports</a></li>
                            <li><a href="includes/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    </div>
    <div id="wrapper">
        <div id="sidebar-wrapper">
            <aside id="sidebar">
                <ul id="sidemenu" class="sidebar-nav">
                    <li>
                        <a href="dashboard.php">
                            <span class="sidebar-icon"><i class="fa fa-dashboard"></i></span>
                            <span class="sidebar-title">Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-userprofile.php">
                            <span class="sidebar-icon"><i class="fa fa-users"></i></span>
                            <span class="sidebar-title">Users Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-add-drivers.php">
                            <span class="sidebar-icon"><i class="fa fa-plus" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Add Drivers</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-list-reports.php">
                            <span class="sidebar-icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                            <span class="sidebar-title">List of reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="admin-drivers-list.php">
                            <span class="sidebar-icon"><i class="fa fa-list" aria-hidden="true"></i></span>
                            <span class="sidebar-title">Drivers Lists</span>
                        </a>
                    </li>
                </ul>
            </aside>            
        </div>
        
        <main id="page-content-wrapper" role="main" class="container-fluid dash">
            <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="/dashboard.php">Dashboard</a></li>
            </ol>
           <div class="row">
                <div class="col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Monthly Summary
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                         <li>
                            <a class="dropdown-item" href="january.php">January</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="febuary.php">February</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="march.php">March</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="april.php">April</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="may.php">May</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="june.php">June</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="july.php">July</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="august.php">August</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="september.php">September</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="october.php">October</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="november.php">November</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="december.php">December</a>
                        </li>
                      </div>
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Monthly Summary
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li>
                            <a class="dropdown-item" href="january.php">Discourteous disrespectful conduct to passenger.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Disobedience to the traffic officer.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Disregarding traffic sign or signal.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">driving under the influence of liquor.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Loading and unloading at the middle of the street.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Loading and unloading at the street corner.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Refusal of convey passenger.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Non wearing of proper current identification card.</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Non posting of current passenger fare</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">No uniform</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Obstruction to traffic</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Over charging of fare</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Over loading</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Trip cutting</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Illegal U Turn</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Smoking</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="january.php">Use cellphone while driving</a>
                        </li>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card__body">
                    <div class="card__chart">
                        <div class="card__head">
                            <h1>Monthly</h1>
                        </div>
                        <div class="card__detail">
                            <canvas class="card__canvas" id="myChart1" width="auto" height="auto"></canvas>
                        </div>
                    </div>
                 <script>
                        var ctx = document.getElementById("myChart1").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'horizontalBar',
                            data: {
                                labels: ["Smoking", "No U Turn", "Discourteous disrespectful conduct to passenger", "Disobedience to the traffic officer", "Disregarding traffic sign or signal", "Driving under the influence of liquor", "Loading and unloading at the middle of the street", "Loading and unloading at the street corner", "Refusal of convey passenger", "Non wearing of proper current identification card", "Non posting of current passenger fare", "No uniform", "Obstruction to traffic", "Over charging of fare", "Over loading" , "Trip cutting", "Use cellphone while driving"],
                                datasets: [
                                    {label: 'January',
                                    data :[<?=json_encode($smoke1);?>, <?=json_encode($uturn1);?>, <?=json_encode($disrespectful1);?>, <?=json_encode($disobedience1);?>, <?=json_encode($disregarding1);?>, <?=json_encode($liquor1);?>, <?=json_encode($loading1);?>, <?=json_encode($unloading1);?>, <?=json_encode($refusal1);?>, <?=json_encode($identification1);?>, <?=json_encode($fare1);?>, <?=json_encode($uniform1);?>, <?=json_encode($obstruction1);?>, <?=json_encode($charging1);?>, <?=json_encode($over1);?>, <?=json_encode($cutting1);?>, <?=json_encode($cellphone1);?>],
                                    scaleFontColor: "white",
                                    backgroundColor: [
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(146, 66, 244, 0.2)',
                                        'rgba(238, 65, 244, 0.2)',
                                        'rgba(66, 244, 137, 0.2)',
                                        'rgba(74, 244, 65, 0.2)',
                                        'rgba(149, 244, 66, 0.2)',
                                        'rgba(244, 157, 65, 0.2)',
                                        'rgba(65, 244, 244, 0.2)',
                                        'rgba(181, 244, 65, 0.2)',
                                        'rgba(0, 12, 255, 0.2)',
                                        'rgba(255, 0, 174, 0.2)',
                                        'rgba(255, 131, 0, 0.2)',
                                    ],
                                    borderColor: [
                                          'rgba(255, 99, 132, 1)',
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(146, 66, 244, 1)',
                                        'rgba(238, 65, 244, 1)',
                                        'rgba(66, 244, 137, 1)',
                                        'rgba(74, 244, 65, 1)',
                                        'rgba(149, 244, 66, 1)',
                                        'rgba(244, 157, 65, 1)',
                                        'rgba(65, 244, 244, 1)',
                                        'rgba(181, 244, 65, 1)',
                                        'rgba(0, 12, 255, 1)',
                                        'rgba(255, 0, 174, 1)',
                                        'rgba(255, 131, 0, 1)'
                                    ],
                                    borderWidth: 1}  
                                ],
                            },
                            options: {
                                legend: {
                                 labels: {
                                    fontColor: "white",
                                    fontSize: 12
                                 }
                                },
                                scales: {
                                    yAxes: [{
                                        responsive: true,
                                         gridLines: {
                                            color: "#cccccc"
                                            },
                                        ticks: {
                                            fontColor: "white",
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
             </script>
            
             <script>
                 new Chart(document.getElementById("myChart"),{
                 "type":"line","data":{
                    "labels":["1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31"],
                        "datasets":[{
                            "label":"Smoking",
                            "data":[<?=json_encode($smoke1);?>, <?=json_encode($smoke2);?>, <?=json_encode($smoke3);?>, <?=json_encode($smoke4);?>, <?=json_encode($smoke5);?>, <?=json_encode($smoke6);?>, <?=json_encode($smoke7);?>, <?=json_encode($smoke8);?>, <?=json_encode($smoke9);?>, <?=json_encode($smoke10);?>, <?=json_encode($smoke11);?>, <?=json_encode($smoke12);?>],
                            "fill":false,
                            "borderColor":'rgba(255, 99, 132, 1)',
                            "lineTension":0.1},
                            {"label":"Illegal U Turn",
                            "data":[<?=json_encode($uturn1);?>, <?=json_encode($uturn2);?>, <?=json_encode($uturn3);?>, <?=json_encode($uturn4);?>, <?=json_encode($uturn5);?>, <?=json_encode($uturn6);?>, <?=json_encode($uturn7);?>, <?=json_encode($uturn8);?>, <?=json_encode($uturn9);?>, <?=json_encode($uturn10);?>, <?=json_encode($uturn11);?>, <?=json_encode($uturn12);?>],
                            "fill":false,
                            "borderColor":'rgba(54, 162, 235, 1)',
                            "lineTension":0.1},
                            {"label":"Disrespectful conduct to passenger",
                            "data":[<?=json_encode($disrespectful1);?>, <?=json_encode($disrespectful2);?>, <?=json_encode($disrespectful3);?>, <?=json_encode($disrespectful4);?>, <?=json_encode($disrespectful5);?>, <?=json_encode($disrespectful6);?>, <?=json_encode($disrespectful7);?>, <?=json_encode($disrespectful8);?>, <?=json_encode($disrespectful9);?>, <?=json_encode($disrespectful10);?>, <?=json_encode($disrespectful11);?>, <?=json_encode($disrespectful12);?>],
                            "fill":false,
                            "borderColor":'rgba(255, 206, 86, 1)',
                            "lineTension":0.1},
                            {"label":"Disobedience to the traffic officer",
                            "data":[<?=json_encode($disobedience1);?>, <?=json_encode($disobedience2);?>, <?=json_encode($disobedience3);?>, <?=json_encode($disobedience4);?>, <?=json_encode($disobedience5);?>, <?=json_encode($disobedience6);?>, <?=json_encode($disobedience7);?>, <?=json_encode($disobedience8);?>, <?=json_encode($disobedience9);?>, <?=json_encode($disobedience10);?>, <?=json_encode($disobedience11);?>, <?=json_encode($disobedience12);?>],
                            "fill":false,
                            "borderColor":'rgba(75, 192, 192, 1)',
                            "lineTension":0.1},
                            {"label":"Disregarding traffic sign or signal",
                            "data":[<?=json_encode($disregarding1);?>, <?=json_encode($disregarding2);?>, <?=json_encode($disregarding3);?>, <?=json_encode($disregarding4);?>, <?=json_encode($disregarding5);?>, <?=json_encode($disregarding6);?>, <?=json_encode($disregarding7);?>, <?=json_encode($disregarding8);?>, <?=json_encode($disregarding9);?>, <?=json_encode($disregarding10);?>, <?=json_encode($disregarding11);?>, <?=json_encode($disregarding12);?>],
                            "fill":false,
                            "borderColor":'rgba(153, 102, 255, 1)',
                            "lineTension":0.1},
                            {"label":"Driving under the influence of liquor",
                            "data":[<?=json_encode($liquor1);?>, <?=json_encode($liquor2);?>, <?=json_encode($liquor3);?>, <?=json_encode($liquor4);?>, <?=json_encode($liquor5);?>, <?=json_encode($liquor6);?>, <?=json_encode($liquor7);?>, <?=json_encode($liquor8);?>, <?=json_encode($liquor9);?>, <?=json_encode($liquor10);?>, <?=json_encode($liquor11);?>, <?=json_encode($liquor12);?>],
                            "fill":false,
                            "borderColor":'rgba(255, 159, 64, 1)',
                            "lineTension":0.1},
                            {"label":"Loading and unloading at the middle of the street",
                            "data":[<?=json_encode($loading1);?>, <?=json_encode($loading2);?>, <?=json_encode($loading3);?>, <?=json_encode($loading4);?>, <?=json_encode($loading5);?>, <?=json_encode($loading6);?>, <?=json_encode($loading7);?>, <?=json_encode($loading8);?>, <?=json_encode($loading9);?>, <?=json_encode($loading10);?>, <?=json_encode($loading11);?>, <?=json_encode($loading12);?>],
                            "fill":false,
                            "borderColor":'rgba(146, 66, 244, 1)',
                            "lineTension":0.1},
                            {"label":"Loading and unloading at the street corner",
                            "data":[<?=json_encode($unloading1);?>, <?=json_encode($unloading2);?>, <?=json_encode($unloading3);?>, <?=json_encode($unloading4);?>, <?=json_encode($unloading5);?>, <?=json_encode($unloading6);?>, <?=json_encode($unloading7);?>, <?=json_encode($unloading8);?>, <?=json_encode($unloading9);?>, <?=json_encode($unloading10);?>, <?=json_encode($unloading11);?>, <?=json_encode($unloading12);?>],
                            "fill":false,
                            "borderColor":'rgba(238, 65, 244, 1)',
                            "lineTension":0.1},
                            {"label":"Refusal of convey passenger",
                            "data":[<?=json_encode($refusal1);?>, <?=json_encode($refusal2);?>, <?=json_encode($refusal3);?>, <?=json_encode($refusal4);?>, <?=json_encode($refusal5);?>, <?=json_encode($refusal6);?>, <?=json_encode($refusal7);?>, <?=json_encode($refusal8);?>, <?=json_encode($refusal9);?>, <?=json_encode($refusal10);?>, <?=json_encode($refusal11);?>, <?=json_encode($refusal12);?>],
                            "fill":false,
                            "borderColor":'rgba(66, 244, 137, 1)',
                            "lineTension":0.1},
                            {"label":"Non wearing of proper current identification card",
                            "data":[<?=json_encode($identification1);?>, <?=json_encode($identification2);?>, <?=json_encode($identification3);?>, <?=json_encode($identification4);?>, <?=json_encode($identification5);?>, <?=json_encode($identification6);?>, <?=json_encode($identification7);?>, <?=json_encode($identification8);?>, <?=json_encode($identification9);?>, <?=json_encode($identification10);?>, <?=json_encode($identification11);?>, <?=json_encode($identification12);?>],
                            "fill":false,
                            "borderColor":'rgba(74, 244, 65, 1)',
                            "lineTension":0.1},
                            {"label":"Non posting of current passenger fare",
                            "data":[<?=json_encode($fare1);?>, <?=json_encode($fare2);?>, <?=json_encode($fare3);?>, <?=json_encode($fare4);?>, <?=json_encode($fare5);?>, <?=json_encode($fare6);?>, <?=json_encode($fare7);?>, <?=json_encode($fare8);?>, <?=json_encode($fare9);?>, <?=json_encode($fare10);?>, <?=json_encode($fare11);?>, <?=json_encode($fare12);?>],
                            "fill":false,
                            "borderColor":'rgba(149, 244, 66, 1)',
                            "lineTension":0.1},
                            {"label":"No Uniform",
                            "data":[<?=json_encode($uniform1);?>, <?=json_encode($uniform2);?>, <?=json_encode($uniform3);?>, <?=json_encode($uniform4);?>, <?=json_encode($uniform5);?>, <?=json_encode($uniform6);?>, <?=json_encode($uniform7);?>, <?=json_encode($uniform8);?>, <?=json_encode($uniform9);?>, <?=json_encode($uniform10);?>, <?=json_encode($uniform11);?>, <?=json_encode($uniform12);?>],
                            "fill":false,
                            "borderColor":'rgba(244, 157, 65, 1)',
                            "lineTension":0.1},
                             {"label":"Obstruction to traffic",
                            "data":[<?=json_encode($obstruction1);?>, <?=json_encode($obstruction2);?>, <?=json_encode($obstruction3);?>, <?=json_encode($obstruction4);?>, <?=json_encode($obstruction5);?>, <?=json_encode($obstruction6);?>, <?=json_encode($obstruction7);?>, <?=json_encode($obstruction8);?>, <?=json_encode($obstruction9);?>, <?=json_encode($obstruction10);?>, <?=json_encode($obstruction11);?>, <?=json_encode($obstruction12);?>],
                            "fill":false,
                            "borderColor":'rgba(65, 244, 244, 1)',
                            "lineTension":0.1},
                            {"label":"Over charging of fare",
                            "data":[<?=json_encode($charging1);?>, <?=json_encode($charging2);?>, <?=json_encode($charging3);?>, <?=json_encode($charging4);?>, <?=json_encode($charging5);?>, <?=json_encode($charging6);?>, <?=json_encode($charging7);?>, <?=json_encode($charging8);?>, <?=json_encode($charging9);?>, <?=json_encode($charging10);?>, <?=json_encode($charging11);?>, <?=json_encode($charging12);?>],
                            "fill":false,
                            "borderColor":'rgba(181, 244, 65, 1)',
                            "lineTension":0.1},
                            {"label":"Over loading",
                            "data":[<?=json_encode($over1);?>, <?=json_encode($over2);?>, <?=json_encode($over3);?>, <?=json_encode($over4);?>, <?=json_encode($over5);?>, <?=json_encode($over6);?>, <?=json_encode($over7);?>, <?=json_encode($over8);?>, <?=json_encode($over9);?>, <?=json_encode($over10);?>, <?=json_encode($over11);?>, <?=json_encode($over12);?>],
                            "fill":false,
                            "borderColor":'rgba(0, 12, 255, 1)',
                            "lineTension":0.1},
                            {"label":"Trip Cutting",
                            "data":[<?=json_encode($cutting1);?>, <?=json_encode($cutting2);?>, <?=json_encode($cutting3);?>, <?=json_encode($cutting4);?>, <?=json_encode($cutting5);?>, <?=json_encode($cutting6);?>, <?=json_encode($cutting7);?>, <?=json_encode($cutting8);?>, <?=json_encode($cutting9);?>, <?=json_encode($cutting10);?>, <?=json_encode($cutting11);?>, <?=json_encode($cutting12);?>],
                            "fill":false,
                            "borderColor":'rgba(255, 0, 174, 1)',
                            "lineTension":0.1},
                            {"label":"Use cellphone while driving",
                            "data":[<?=json_encode($cellphone1);?>, <?=json_encode($cellphone2);?>, <?=json_encode($cellphone3);?>, <?=json_encode($cellphone4);?>, <?=json_encode($cellphone5);?>, <?=json_encode($cellphone6);?>, <?=json_encode($cellphone7);?>, <?=json_encode($cellphone8);?>, <?=json_encode($cellphone9);?>, <?=json_encode($cellphone10);?>, <?=json_encode($cellphone11);?>, <?=json_encode($cellphone12);?>],
                            "fill":false,
                            "borderColor":'rgba(255, 131, 0, 1)',
                            "lineTension":0.1},
                            ],
                        },
                        "options":{
                                legend: {
                                 labels: {
                                    fontColor: "white",
                                    fontSize: 12
                                 }
                                },
                                scales: {
                                    yAxes: [{
                                        responsive: true,
                                         gridLines: {
                                            color: "white"
                                            },
                                        ticks: {
                                            fontColor: "white",
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
    
                    });
                </script>
             </div>
            </div>
        </main>
    </div> 
    </div>
    <script src="/library/plugins/jquery/jquery-2.1.4.min.js"></script><!-- 
    <script src="/library/plugins/mdb/js/jquery-3.1.1.min.js"></script> -->
    <script src="/library/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="/library/plugins/mdb/js/mdb.min.js"></script>-->
    <script src="/library/js/global.js"></script>

</body>
</html>