<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <title>Post your message !</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Votre message</h2>
            </div>
        </div>
        <div class="row justify-content-center ">
            <div class="col-6">
                <form action="action.php" method="POST" id="form">
                    <div class="mb-3">
                        <label for="username" class="form-label">Votre pseudo : </label>
                        <input type="text" name='username' value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" class="form-control">
                        <?php if(isset($msgFormName)) echo $msgFormName; ?>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message</label>
                        <textarea class="form-control rounded-0" name="message" rows="10"><?php if(isset($_POST['message'])) echo $_POST['message'];?></textarea>
                        <?php if(isset($msgFormMsg)) echo $msgFormMsg; ?>
                    </div>
                    <input type="submit" class="btn btn-primary" name="valider" value="valider">
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>