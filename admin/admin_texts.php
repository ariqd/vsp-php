<?php
include ("../session.php");
$index = "select * from teks where id like 'index%'";
$result_index = mysqli_query($db, $index);
$about = "select * from teks where id like 'about%'";
$result_about = mysqli_query($db, $about);
$expertise = "select * from teks where id like 'expertise%'";
$result_expertise = mysqli_query($db, $expertise);
$client = "select * from teks where id like 'client%'";
$result_client = mysqli_query($db, $client);
$lawyers = "select * from teks where id like 'lawyers%' order by id + 0";
$result_lawyers = mysqli_query($db, $lawyers);
$contact = "select * from teks where id like 'contact%'";
$result_contact = mysqli_query($db, $contact);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VSP Admin</title>
    <link rel="icon" type="image/png" href="../assets/img/favicon-16x16.png" sizes="16x16" />
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/admin.css">
    <style>
        #myTab .nav-item {
            color: #fff;
            background: #C0202F;
            border: 1px solid #C0202F;
            margin-right: 10px;
        }

        #myTab .nav-item:hover, #myTab .nav-item.active{
            color: #C0202F;
            background: #fff;
            border: 1px solid #C0202F;
        }

        input, textarea {
            border: 5px solid #000;
        }
    </style>
</head>
<body>
    <header>
      <nav class="navbar navbar-expand-md navbar-light fixed-top bg-light">
        <a class="navbar-brand" href="#">VSP Admin</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                  <a href="../index.php" class="nav-link">Go To Front Page</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Log Out</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="admin_artikel.php">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="admin_texts.php">Teks</a>
            </li>
          </ul>
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Teks</h1>
            <nav class="nav nav-pills" id="myTab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                   aria-controls="nav-home" aria-selected="true">Home</a>
                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
                   aria-controls="nav-about" aria-selected="false">About VSP</a>
                <a class="nav-item nav-link" id="nav-expertise-tab" data-toggle="tab" href="#nav-expertise" role="tab"
                   aria-controls="nav-expertise" aria-selected="false">Expertise</a>
                <a class="nav-item nav-link" id="nav-client-tab" data-toggle="tab" href="#nav-client" role="tab"
                   aria-controls="nav-client" aria-selected="false">Client</a>
                <a class="nav-item nav-link" id="nav-lawyers-tab" data-toggle="tab" href="#nav-lawyers" role="tab"
                   aria-controls="nav-lawyers" aria-selected="false">Lawyers</a>
                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
                   aria-controls="nav-contact" aria-selected="false">Contact</a>
            </nav>
                <div class="tab-content flex-column" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <form action="edit_texts_execute.php" method="post">
                                <?php while ($row = mysqli_fetch_assoc($result_index)) { ?>
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <textarea name="text" cols="100" rows="5" style="border: 1px solid #bdbdbd"><?php echo $row['teks'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="text-center pt-5"><?php echo $row['teks'] ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                                <button type="submit" name="index" class="btn btn-primary">Submit</button>
                            </form>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <?php while ($about = mysqli_fetch_array($result_about, MYSQLI_ASSOC)) $abouts[] = $about; { ?>
                            <?php foreach ($abouts as $value) { ?>
                                <input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
                                <div class="form-row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <textarea name="text[]" cols="100" rows="10" style="border: 1px solid #bdbdbd"><?php echo $value['teks'] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class="pt-5"><?php echo $value['teks'] ?></h4>
                                    </div>
                                </div>
                            <?php } ?>
                                <?php  } ?>
                            <button type="submit" name="about" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-expertise" role="tabpanel" aria-labelledby="nav-expertise-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <?php while ($expertise = mysqli_fetch_array($result_expertise, MYSQLI_ASSOC)) $expertises[] = $expertise; { ?>
                                <?php foreach ($expertises as $value) { ?>
                                    <input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <textarea name="text[]" cols="100" rows="10" style="border: 1px solid #bdbdbd"><?php echo $value['teks'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="pt-5"><?php echo $value['teks'] ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  } ?>
                            <button type="submit" name="about" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-client" role="tabpanel" aria-labelledby="nav-client-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <?php while ($client = mysqli_fetch_array($result_client, MYSQLI_ASSOC)) $clients[] = $client; { ?>
                                <?php foreach ($clients as $value) { ?>
                                    <input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <textarea name="text[]" cols="100" rows="10" style="border: 1px solid #bdbdbd"><?php echo $value['teks'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="pt-5"><?php echo $value['teks'] ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  } ?>
                            <button type="submit" name="about" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-lawyers" role="tabpanel" aria-labelledby="nav-lawyers-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <?php while ($row = mysqli_fetch_array($result_lawyers, MYSQLI_ASSOC)) $rows[] = $row; { ?>
                                <?php foreach ($rows as $value) { ?>
                                    <input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <textarea name="text[]" cols="100" rows="10" style="border: 1px solid #bdbdbd"><?php echo $value['teks'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="pt-5"><?php echo $value['teks'] ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  } ?>
                            <button type="submit" name="about" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <form action="edit_texts_execute.php" method="post">
                            <?php while ($contact = mysqli_fetch_array($result_contact, MYSQLI_ASSOC)) $contacts[] = $contact; { ?>
                                <?php foreach ($contacts as $value) { ?>
                                    <input type="hidden" name="id[]" value="<?php echo $value['id'] ?>">
                                    <div class="form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <textarea name="text[]" cols="100" rows="10" style="border: 1px solid #bdbdbd"><?php echo $value['teks'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <h4 class="pt-5"><?php echo $value['teks'] ?></h4>
                                        </div>
                                    </div>
                                <?php } ?>
                            <?php  } ?>
                            <button type="submit" name="about" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        </main>
      </div>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.2.1.min.js"
      integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
      crossorigin="anonymous"></script>
      <script src="../assets/js/popper.min.js" charset="utf-8"></script>
    <script src="../assets/js/bootstrap.min.js" charset="utf-8"></script>
</body>
</html>
