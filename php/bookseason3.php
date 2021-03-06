<?php
  session_start();
  if(!isset($_SESSION['fail'])):
    $_SESSION['fail'] = false;
  endif;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/button.css">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css">
    <title> Eudoxus </title>
</head>
<body style="font-family: 'Alegreya Sans', sans-serif;">
    <div class="container-fluid">
      <!-- 1rst level (logo,login,signup) -->
      <div class="row" style="margin-bottom:1%;">
          <div class="col-9" style="padding-top:1%; padding-left:1%;">
              <a href="./index.php">
                  <img src="../img/logo.jpg" class="rounded">
              </a>
          </div>
          <div class="col" style="margin-left:6%;">
                  <div class="dropdown">
                    <a data-toggle="dropdown">
                      <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496; padding-left:32%;">
                        <i class="fas fa-user" style="margin-top:11%;"></i>
                      </span>
                    </a>
                    <ul class="dropdown-menu" style="margin: auto;padding-top:2%;padding-left:2%;text-align: center;">
                      <li><a href="./profile.php"> Προφίλ</a></li>
                      <li><a href="./index.php"> Αποσύνδεση</a></li>
                  </ul>
                </div>
              </div>
      </div>
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="collapse navbar-collapse" id="navbarToggleExternalContent">
                  <ul class="navbar-nav">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Φοιτητές
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookseason1.php"> Δήλωση Συγγραμμάτων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section1"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Εκδότες
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./bookinsertion.php"> Προσθήκη Συγγράμματος </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>

                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Σημεία Διανομής
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Προσθήκη Σημείου Διανομής </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Διανομή Σε Φοιτητές  </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section2"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Διαθέτες Σημειώσεων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Ανέβασμα σημειώσεων </a>
                              <a class="dropdown-item" href="./underconstruction.php"> Ανταλλαγή Συγγραμμάτων </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" aria-haspopup="true" aria-expanded="false">
                            Υπηρεσίες Ιδρυμάτων
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="./underconstruction.php"> Τροποποίηση Προγράμματος Σπουδών </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="./eudoxusinfo.php#section3"> Τι προσφέρει ο Εύδοξος </a>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="./eudoxusinfo.php" style="position:absolute;right:12%;"> Τι είναι ο Εύδοξος </a>
                      </li>
                      <li class="nav-item" style="position:absolute;right:2%;">
                          <a class="nav-link" href="./underconstruction.php"> Επικοινωνία </a>
                      </li>
                  </ul>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent"
                        aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
          </nav>

      <?php
        $selectedAccessPoints = array();
        if(!empty($_POST['selectedAccessPoint'])) {
            foreach($_POST['selectedAccessPoint'] as $check) {
                echo $check;
                $selectedAccessPoints[] = $check;
            }
            $_SESSION['selectedAccessPoint'] = $selectedAccessPoints;
        }
        $selectedBooks = $_SESSION['selectedBooks'];
        //$id = $_SESSION['userID'];
        require_once 'db_connect.php';
        $conn = new mysqli("$hn","$un","$pw","$db");
        // Check connection
        if (mysqli_connect_errno()){
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            die();
        }
        mysqli_query($conn, "SET NAMES 'utf8'");
        // Select book information
        $books = array();
        $accessPoints = array();
        foreach ($selectedBooks as $bookId) {
            $sql = "SELECT title, author, accessPointId1 FROM Books WHERE idBook =" .$bookId;
            $res_data = mysqli_query($conn, $sql);
            $results = mysqli_fetch_array($res_data);
            $books[] = $results;
            // Check access points information
            $sql = "SELECT brandName, address, map FROM AccessPoints WHERE idAccessPoint = " .$results["accessPointId1"];
            $res_data = mysqli_query($conn, $sql);
            $accessPoints[] = mysqli_fetch_array($res_data);
        }
        mysqli_close($conn);
      ?>

      <!-- 3rd phase of book declaration, declaration overview -->
      <div class="mx-auto" style="width: 80%;">
          <!-- the navigation bar -->
          <div class="row justify-content-center" style="margin-top:6%;">
            <h3 style="color:#2AA2DE;">3.Υποβολή Δήλωσης</h3>
          </div>
          </br>
          <!-- overview of the books declared -->
           <form action="postSubmitDeclaration.php" method="post">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">
                            <h5>Επισκόπηση</h5></label>
                        <div class="col-xs-9">
                            <div style="border: 1px solid #e5e5e5; overflow: auto; padding: 10px; height: 400px;">
                                <dl>
                                    <?php $numBooks = 0;
                                      foreach ($books as $book) { ?>
                                        <dt> <?php echo $book['title']; echo ",  "; echo $book['author']; ?> </dt>
                                        <dd>- <?php echo $accessPoints[$numBooks]['address'];?> </dd>
                                    <?php 
                                        $numBooks++;
                                      } 
                                    ?>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label class="col-xs-3 control-label">
                            <h5>Όροι χρήσης</h5></label>
                        <div class="col-xs-9">
                            <div style="border: 1px solid #e5e5e5; height: 400px; width: 500px; overflow: auto; padding: 10px;">
                                <p>1. Η Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ παρέχεται από το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη του Εθνικού Δικτύου Έρευνας και Τεχνολογίας ΑΕ (εφεξής ΕΔΕΤ Α.Ε.). Αντικείμενο και σκοπός της υπηρεσίας είναι η ορθολογική διαχείριση της επιλογής και διανομής συγγραμμάτων για τους φοιτητές της Τριτοβάθμιας Εκπαίδευσης. Κάθε συμμετέχων φοιτητής οφείλει να διαβάσει προσεκτικά τους παρόντες όρους και προϋποθέσεις συμμετοχής πριν από την συμμετοχή του στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων». Η συμμετοχή του στο πρόγραμμα συνεπάγεται την αυτόματη αποδοχή των παρόντων όρων συμμετοχής.</p>
                                <p>2. Ο συμμετέχων φοιτητής στο πρόγραμμα «ΕΥΔΟΞΟΣ – Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Συγγραμμάτων» αποδέχεται ότι τα στοιχεία που δηλώνει στο πρόγραμμα είναι αληθή και επίκαιρα και ότι κάθε δήλωσή του στο πρόγραμμα επέχει θέση Υπεύθυνης Δήλωσης κατά την έννοια και με τις συνέπειες του ν.1599/1986.</p>
                                <p>3. Ο συμμετέχων φοιτητής δηλώνει ότι τα Συγγράμματα που επιλέγει και παραλαμβάνει μέσω του προγράμματος, αντιστοιχούν στα μαθήματα τα οποία έχει δηλώσει κατά την εγγραφή του και νομίμως παρακολουθεί στο ακαδημαϊκό του Τμήμα κατά το τρέχον εξάμηνο και για τα οποία διατηρεί το δικαίωμα της παραλαβής των αντίστοιχων Συγγραμμάτων.</p>
                                <p>4. Όλοι οι προπτυχιακοί φοιτητές των Α.Ε.Ι. δικαιούνται να επιλέγουν και να προμηθεύονται δωρεάν αριθμό διδακτικών συγγραμμάτων ίσο με τον συνολικό αριθμό των υποχρεωτικών και επιλεγόμενων μαθημάτων που απαιτούνται για τη λήψη του πτυχίου. Εάν προπτυχιακοί φοιτητές επιλέξουν περισσότερα επιλεγόμενα μαθήματα από όσα απαιτούνται για τη λήψη του πτυχίου, το δικαίωμα επιλογής και δωρεάν προμήθειας διδακτικών συγγραμμάτων δεν επεκτείνεται και στα επιπλέον μαθήματα που αυτοί επέλεξαν και εξετάστηκαν, ακόμη και αν αυτά υπολογίζονται για τη λήψη του πτυχίου.</p>
                                <p>5. Κάθε συμμετέχων φοιτητής που λαμβάνει ένα Σύγγραμμα για ένα μάθημα που δικαιούται δεν μπορεί να λάβει το ίδιο Σύγγραμμα για άλλο μάθημα στο οποίο έχει οριστεί το ίδιο Σύγγραμμα</p>
                                <p>6. Στην περίπτωση που ένας εκδότης δεν έχει σημείο παράδοσης Συγγραμμάτων στην πόλη όπου σπουδάζει ο συμμετέχων φοιτητής, το Σύγγραμμα θα παραδίδεται υποχρεωτικά μέσω υπηρεσίας ταχυμεταφοράς, στην πόλη του φοιτητή και σε σημείο παρουσίας της εταιρείας ταχυμεταφοράς, που θα επιλέγεται από τον ίδιο. Σε περίπτωση που ο φοιτητής αμελήσει να παραλάβει το Σύγγραμμα αυτό, χάνει το δικαίωμα για το συγκεκριμένο Σύγγραμμα. </p>
                                <p>7. Η συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα του συμμετέχοντα φοιτητή υπόκειται στους όρους του παρόντος καθώς και στις σχετικές διατάξεις του ν. 2472/97 για την προστασία του ατόμου από την επεξεργασία δεδομένων προσωπικού χαρακτήρα, όπως ισχύει. Τα δεδομένα συλλέγονται για τους σκοπούς της παροχής της υπηρεσίας, για την επικοινωνία με τους συμμετέχοντες φοιτητές και την ενημέρωσή τους για ζητήματα που σχετίζονται με την υπηρεσία αυτή, και στο πλαίσιο αυτού του σκοπού ανακοινώνονται στα οικεία Ιδρύματα Τριτοβάθμιας Εκπαίδευσης. Με την παροχή της συγκατάθεσης στο παρόν, ο φοιτητής παρέχει και τη συγκατάθεσή του για τη συλλογή και επεξεργασία των δεδομένων προσωπικού χαρακτήρα που τον αφορούν κατά τα οριζόμενα στο ν. 2472/97. Η ΕΔΕΤ Α.Ε. τηρεί το απόρρητο των δεδομένων προσωπικού χαρακτήρα που συλλέγει και επεξεργάζεται για λογαριασμό του Υπουργείου Παιδείας, Έρευνας και Θρησκευμάτων και δεν διαβιβάζει τα δεδομένα σε τρίτους με εξαίρεση τα προβλεπόμενα στο παρόν. H ΕΔΕΤ Α.Ε. λαμβάνει τα κατάλληλα οργανωτικά και τεχνικά μέτρα για την ασφάλεια των δεδομένων και την προστασία τους από τυχαία ή αθέμιτη καταστροφή, τυχαία απώλεια, αλλοίωση, απαγορευμένη διάδοση ή πρόσβαση και κάθε άλλη μορφή αθέμιτης επεξεργασίας. Έχετε δικαίωμα να πληροφορείστε ή να λαμβάνετε ενημέρωση σχετικά με τα προσωπικά δεδομένα σας που τηρούμε. Αν επιθυμείτε πληροφορίες σχετικά με τα προσωπικά σας στοιχεία και τη χρήση τους ή θέλετε να διορθωθούν, παρακαλούμε απευθυνθείτε στο Γραφείο Αρωγής Χρηστών στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx.</p>
                                <p>8. Το Υπουργείο Παιδείας, Έρευνας και Θρησκευμάτων με την υποστήριξη της ΕΔΕΤ Α.Ε. προσφέρει στους φοιτητές των Α.Ε.Ι. την υπηρεσία ΕΥΔΟΞΟΣ+, η οποία είναι διακριτή από την Ηλεκτρονική Υπηρεσία Ολοκληρωμένης Διαχείρισης Πανεπιστημιακών Συγγραμμάτων ΕΥΔΟΞΟΣ. Η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων προσφέρει τον ηλεκτρονικό χώρο συνάντησης των φοιτητών των Α.Ε.Ι. που επιθυμούν να ανταλλάξουν μεταξύ τους συγγράμματα.</p>
                                <p>9. Στόχος της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η ενίσχυση της περιβαλλοντικής συνείδησης των μελών της Ελληνικής ακαδημαϊκής κοινότητας, μέσω της αξιοποίησης χρησιμοποιημένων έντυπων συγγραμμάτων που ανήκουν σε φοιτητές, οι οποίοι επιθυμούν να τα ανταλλάξουν δωρεάν με άλλους φοιτητές.</p>
                                <p>10. Η χρήση της υπηρεσίας ΕΥΔΟΞΟΣ+ από τους φοιτητές είναι καθαρά προαιρετική. Σε περίπτωση που οι φοιτητές δεν συμφωνούν με κάποιον από τους παρόντες όρους χρήσης, καλούνται να εγκαταλείψουν την ιστοσελίδα άμεσα και να μην κάνουν χρήση της υπηρεσίας. Η υπηρεσία ΕΥΔΟΞΟΣ+ προσφέρεται δωρεάν σε όλους φοιτητές των Α.Ε.Ι. Σε καμία περίπτωση η υπηρεσία ΕΥΔΟΞΟΣ+ για την ανταλλαγή συγγραμμάτων δεν συνεπάγεται την καταβολή οποιουδήποτε αντιτίμου. Προϋπόθεση χρήσης της υπηρεσίας ΕΥΔΟΞΟΣ+ είναι η αποδοχή ότι αυτή προσφέρεται μόνο για την ανταλλαγήδωρεάν συγγραμμάτων χωρίς αντίτιμο.</p>
                                <p>11. Οι χρήστες που επιθυμούν, μπορούν να δωρίζουν τα συγγράμματα με αποκλειστικά δική τους ευθύνη, εφόσον και στο μέτρο που έχουν το νόμιμο δικαίωμα να προχωρήσουν στην δωρεά, γεγονός που δεν εγγυάται η υπηρεσία ΕΥΔΟΞΟΣ+ και για το οποίο δεν φέρει καμία ευθύνη. Απαγορεύεται ρητά στους χρήστες της υπηρεσίας η πώληση ή η μίσθωση των βιβλίων ή το χρησιδάνειο αυτών ή η κάθε είδους εκμετάλλευση των δικαιωμάτων που συνδέονται με τα συγγράμματα ή η καταβολήαποδοχή οποιουδήποτε αντιτίμου με ή με αφορμή την παράδοση των ανταλλασσόμενων συγγραμμάτων.</p>
                                <p> 12. Ο διαχειριστής της υπηρεσίας δεν φέρει καμία ευθύνη έναντι των χρηστών ή έναντι κάθε τρίτου (νομικού ή φυσικού προσώπου) για τυχόν συμπεριφορά των χρηστών διαφορετική από αυτή για την οποία προσφέρεται η υπηρεσία, δηλαδή για την ανταλλαγή χρησιμοποιημένων συγγραμμάτων κυριότητας των χρηστών. Οι χρήστες φέρουν την αποκλειστική ευθύνη πρόσβασης στην υπηρεσία ΕΥΔΟΞΟΣ+ και είναι οι μόνοι και οι αποκλειστικοί υπεύθυνοι να αποκαταστήσουν πλήρως κάθε ζημία που θα υποστεί η υπηρεσία ΕΥΔΟΞΟΣ+, οι συνεργάτες της ή / και οποιοδήποτε τρίτο πρόσωπο εξαιτίας οποιασδήποτε αμφισβήτησης / διαφοράς / διαμάχης που τυχόν προκύψει και θα οφείλεται στη μη συμμόρφωση των χρηστών ή εξουσιοδοτούμενων από αυτούς προσώπων με τους όρους του παρόντος.</p>
                                <p>13. Σε περίπτωση χρήσης των υπηρεσιών της υπηρεσίας ΕΥΔΟΞΟΣ+ με τρόπο που αντιβαίνει τους παρόντες όρους του, οι διαχειριστές της διατηρούν το δικαίωμα αποκλεισμού χωρίς προειδοποίηση του μη συμμορφούμενου χρήστη από τις υπηρεσίες του ΕΥΔΟΞΟΣ+. Το περιεχόμενο και οι πληροφορίες που περιλαμβάνονται στο ΕΥΔΟΞΟΣ+ δεν θα πρέπει σε καμιά περίπτωση να θεωρούνται ως συμβουλές ή ως παραίνεση για συγκεκριμένη ενέργεια.</p>
                                <p>14. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν παρέχουν καμία ρητή εγγύηση, ότι τα ανταλλασσόμενα συγγράμματα θα παραδίδονται κατάλληλα, δίχως πραγματικά ή νομικά ελαττώματα. Οι διαχειριστές της υπηρεσίας ΕΥΔΟΞΟΣ+ δεν φέρουν οποιαδήποτε ευθύνη σε περίπτωση ανταλλαγής συγγραμμάτων με πραγματικά ή νομικά ελαττώματα.</p>
                                <p>15. Η υπηρεσία ΕΥΔΟΞΟΣ+ ενδέχεται να συνεργάζεται με άλλους φορείς ή νομικά πρόσωπα για τη διενέργεια κληρώσεων και διαγωνισμών. Η ευθύνη για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του περιεχομένου αυτού που δημοσιεύεται στις σελίδες του ΕΥΔΟΞΟΣ+ ανήκει αποκλειστικά στους φορείς που διενεργούν την κλήρωση ή το διαγωνισμό και παρέχουν τα δώρα στους φοιτητές. Καμία ευθύνη δεν φέρει ο διαχειριστής της υπηρεσία ΕΥΔΟΞΟΣ+ για την αρτιότητα, ακρίβεια, πληρότητα, επάρκεια, νομιμότητα και καταλληλότητα του διαγωνισμού ή της κλήρωσης και της διανομής των δώρων.</p>
                                <p>16. Απαγορεύεται στους χρήστες να χρησιμοποιούν τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ για τη διακίνηση δεδομένων που εμπεριέχουν ή συνεπάγονται:  -> ψευδή δήλωση για την ταυτότητα του χρήστη / μέλους ή παραπλανητική δήλωση αναφορικά με τη σχέση ή / και συνεργασία του χρήστη / μέλους με κάποιο άλλο νομικό ή φυσικό πρόσωπο. -> παραχάραξη ή άλλη αλλοίωση των αναγνωριστικών των χρηστών / μελών με σκοπό την παραπλάνηση ως προς την προέλευση του περιεχομένου που μεταδίδεται μέσω των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+. -> διαφημιστικά μηνύματα ή άλλου περιεχομένου προώθησης προϊόντων ή υπηρεσιών ή τρίτων δικτυακών τόπων, την αποστολή ανεπιθύμητων και μη προσκαλούμενων από τον λήπτη ηλεκτρονικών μηνυμάτων και οποιαδήποτε άλλη μορφή ανεπιθύμητης προώθησης περιεχομένου. -> ιούς ή οποιοδήποτε άλλο ηλεκτρονικό κώδικα, αρχεία ή προγράμματα σχεδιασμένα να παρεμβληθούν, καταστρέψουν ή περιορίσουν τη λειτουργία οποιουδήποτε λογισμικού ή εξοπλισμού ηλεκτρονικών υπολογιστών ή τηλεπικοινωνιακού δικτύου ή εξοπλισμού. -> παρεμβολή στις υπηρεσίες ή διάσπαση των υπηρεσιών ή των servers ή των δικτύων που είναι συνδεδεμένα με τις υπηρεσίες ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ ή μη συμμόρφωση με τους κανόνες, τις προϋποθέσεις, τις διαδικασίες και τους κανόνες των δικτύων αυτών. -> παραβίαση, με ή χωρίς πρόθεση, οποιασδήποτε τοπικής, εθνικής, ευρωπαϊκής, διεθνούς νομοθεσίας ή / και οποιουδήποτε κανόνα που έχει νομοθετική ισχύ και αφορά ή / και καλύπτει οποιαδήποτε υπηρεσία ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+. -> παρενόχληση με οποιονδήποτε τρόπο της ιδιωτικής ζωής και των ατομικών και κοινωνικών δικαιωμάτων άλλων χρηστών / μελών αλλά και κάθε ατόμου.</p>
                                <p>17. Για κάθε απορία τους, οι χρήστες των υπηρεσιών ΕΥΔΟΞΟΣ και ΕΥΔΟΞΟΣ+ μπορούν να απευθύνονται στο τηλέφωνο 215-215-7850 ή ηλεκτρονικά στο http://eudoxus.gr/OnlineReport.aspx. Σε κάθε περίπτωση η ΕΔΕΤ Α.Ε. διατηρεί το δικαίωμα τροποποίησης των παρόντων όρων και προϋποθέσεων κατόπιν ενημέρωσης των συμμετεχόντων φοιτητών μέσω της παρούσας ιστοσελίδας. Για τον λόγο αυτό οι συμμετέχοντες φοιτητές οφείλουν να επισκέπτονται τακτικά την ιστοσελίδα του έργου και να ελέγχουν τους όρους και τις προϋποθέσεις συμμετοχής.</p>

                            </div>
                        </div>
                    </div>
                    <input type="checkbox" name="vehicle1" value="Bike" required="required"> Αποδέχομαι τους όρους χρήσης
                </div>
            </div>
            
            <div class="row">
              <div class="col">
                <button type="button" class="btn btn-info" onclick="window.location='./bookseason2.php';">Προηγούμενο Βήμα</button>
              </div>
              <div class="col"></div>
              <div class="col"></div>
              <!-- complete the declaration procedure -->
              <div class="col">
                  <button type="submit" class="btn" style="color: white;background-color: #FE8946;">Ολοκλήρωση Δήλωσης</button>
              </div>
            </div>
          </form>
      </div>
    </div>
</body>
</html>
