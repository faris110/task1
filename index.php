<?php

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

include_once './parts/header.php'; 

?>

      <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
          <div class="col-md-5 p-lg-5 mx-auto ">
              <img id="image" src="./img/image.png" alt="">
              
              <h1 class="display-4 fw-normal">اربح معنا</h1>
              <p class="lead fw-normal">باقي على فتح التسجيل</p>

              <h3 id="countdown"></h3>
              <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
          </div>

          <div class="container">
            <h3>للدخول في السحب اتبع ما يلي:</h3>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه</li>
              <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن أسئلة وأجوبة حرة للجميع</li>
              <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
              <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
              <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
            </ul>

          </div>
      </div>

      <div class="container">
        <div class="position-relative">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
            <form action="" method="POST">
                <h3 class="text-center">الرجاء ادخل معلوماتك</h3>

                <div class="mb-3">
                  <label for="firstname" class="form-label">الاسم الاول</label>
                  <input type="text" name="firstname" class="form-control" id="firstname" value="<?php if(!empty($firstname)){echo $firstname;} else{ null ;}  ?>" autocomplete="off">
                  <div class="form-text error"><?php if(isset($errors['firstnameError'])){echo $errors['firstnameError'];} ?></div>
                </div>

                <div class="mb-3">
                  <label for="lastname" class="form-label">الاسم الاخير</label>
                  <input type="text" name="lastname" class="form-control" id="lastname" value="<?php if(!empty($lastname)){echo $lastname;} else{ null ;}  ?>" autocomplete="off">
                  <div class="form-text error"><?php if(isset($errors['lastnameError'])){echo $errors['lastnameError'];} ?></div>
                </div>

                <div class="mb-3">
                  <label for="email" class="form-label">البريد الالكتروني</label>
                  <input type="text" name="email" class="form-control" id="email" value="<?php if(!empty($email)){echo $email;} else{ null ;}  ?>" autocomplete="off">
                  
                  <div class="form-text error">
                      <?php if(isset($errors['emailError'])){
                        echo $errors['emailError'];
                      } ?>
                  </div>
                </div>
                  
               

                <button type="submit" name="submit"  class="btn btn-primary mt-3">إرسال المعلومات</button>
            </form>

             <!-- Button trigger modal -->
            <div class="d-grid gap-2 col-6 mx-auto mt-5"> 
              <button id="winner" type="button" class="btn btn-primary">أختيار الرابح</button>
            </div>
        </div>
      </div>

      <div class="loader-con">
          <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
          </div>
      </div>

     

      <!-- Modal -->
      <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                
                <div class="modal-header">
                  <h5 class="modal-title" id="modalLabel">الرابح في المسابقة</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <?php foreach($users as $user): ?>
                      <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['fristName']) . ' ' . htmlspecialchars($user['lastName']) ; ?> </h1>
                  <?php endforeach; ?>
                </div>
                
              </div>
          </div>
      </div>

<?php 

include_once './parts/footer.php' 

?>