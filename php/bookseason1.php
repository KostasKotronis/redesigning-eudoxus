<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/treeview.css">
      <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/index.css">
      <title> Eudoxus </title>
  </head>
  <body style="font-family: 'Alegreya Sans', sans-serif;">
    <!-- User should be authorized to get books -->
      <?php if(!isset($_SESSION['mail'])): ?>
        <? header('Location: '."./login.php"); ?>
      <?php endif; ?>
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
                          <span class="dropdown" data-toggle="dropdown" style="font-size: 2.5em; color:#138496;padding-left:32%;">
                            <i class="fas fa-user" style="margin-top:11%;"></i>
                          </span>
                        </a>
                        <ul class="dropdown-menu" style="margin: auto;padding-top:2%;padding-left:2%;text-align: center;">
                          <li><a href="./profile.php"> Προφίλ</a></li>
                          <li><a href="./logout.php"> Αποσύνδεση</a></li>
                      </ul>
                    </div>
                </div>
          </div>
          <div class="mx-auto" style="width: 80%;">
              <!-- 2nd level navigation button -->
              <div class="row" style="margin-top:6%;">
                  <div class="col"></div>
                  <div class="col-6">
                      <h3 style="color:#2AA2DE;margin-left: 14%">1.Επιλογή Συγγραμμάτων</h3>
                  </div>
                  <div class="col">
                      <a type="submit" class="btn btn-info" href="bookseason2.php">Επόμενο Βήμα</a>
                  </div>
              </div>
              </br>
              <!-- choose for each semester and lesson a book -->
              <div class="row">
                      <div style="border: 1px solid #e5e5e5; overflow: auto; padding: 1%; width: 90%;">
                          <ul id="myUL">
                              <li><span class="caret">Η ΣΧΟΛΗ ΜΟΥ</span>
                                  <ul class="nested">
                                      <li><span class="caret">1ο ΕΞΑΜΗΝΟ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στην Πληροφορική και στις Τηλεπικοινωνίες</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Λογική Σχεδίαση</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Γραμμική Άλγεβρα</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Εισαγωγή στον Προγραμματισμό</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Διακριτά Μαθηματικά</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li><span class="caret">3ο ΕΞΑΜΗΝΟ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στην Πληροφορική και στις Τηλεπικοινωνίες</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Λογική Σχεδίαση</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Γραμμική Άλγεβρα</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Εισαγωγή στον Προγραμματισμό</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Διακριτά Μαθηματικά</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li><span class="caret">5ο ΕΞΑΜΗΝΟ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στην Πληροφορική και στις Τηλεπικοινωνίες</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Λογική Σχεδίαση</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Γραμμική Άλγεβρα</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Εισαγωγή στον Προγραμματισμό</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Διακριτά Μαθηματικά</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li><span class="caret">7ο ΕΞΑΜΗΝΟ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στην Πληροφορική και στις Τηλεπικοινωνίες</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Λογική Σχεδίαση</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Γραμμική Άλγεβρα</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Εισαγωγή στον Προγραμματισμό</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Διακριτά Μαθηματικά</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                              </br>
                              <li><span class="caret">ΔΙΑΣΥΝΔΕΔΕΜΕΝΕΣ ΣΧΟΛΕΣ</span>
                                  <ul class="nested">
                                      <li><span class="caret">ΜΙΘΕ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στην Πληροφορική και στις Τηλεπικοινωνίες</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                      <li><span class="caret">ΦΠΨ</span>
                                          <ul class="nested">
                                              <li><span class="caret">Εισαγωγή στον Προγραμματισμό</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                              <li><span class="caret">Διακριτά Μαθηματικά</span>
                                                  <ul class="nested">
                                                      <form>
                                                          <input type="radio" name="selection" value="s1"> s1
                                                          <br>
                                                          <input type="radio" name="selection" value="s2"> s2
                                                          <br>
                                                      </form>
                                                  </ul>
                                              </li>
                                          </ul>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </div>
              </div>
          </div>
      </div>
      <!-- only students can get books -->
      <?php if($_SESSION['typeofuser'] != 1): ?>
          <script>
            alert("Πρέπει να είστε συνδεδεμένος σαν φοιτητής! ");
            window.history.back();
          </script>
        }
      <?php endif; ?>
      <!-- tree view js -->
      <script>
          var toggler = document.getElementsByClassName("caret");
          var i;

          for (i = 0; i < toggler.length; i++) {
              toggler[i].addEventListener("click", function() {
                  this.parentElement.querySelector(".nested").classList.toggle("active");
                  this.classList.toggle("caret-down");
              });
          }
      </script>
  </body>
</html>
