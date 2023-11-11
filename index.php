<?php
include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';

?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">



<?php include_once './parts/header.php'; ?>



<div class="position-relative overflow-hidden p-3 p-md-3 text-center bg-light ">
  <div class="col-md-5 p-lg-5 mx-auto">
    <img src="./images/winning.jpg">
        <h1 class="display-4 fw-normal">اربح مع طيف</h1>
        <p class="lead fw-normal">باقي عل فتح التسجيل</p>
        <h3 id="demo"></h3>
        <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>

      <div class="container">  
        <h3>للدخول في السحب اتبع ما يلي:</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">تابع البث المباشر على صفحتي على فيسبوك بالتاريخ المذكور اعلاه </li>
          <li class="list-group-item">سأقوم ببث مباشر لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع</li>
          <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
          <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
          <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برامج كامنازيا</li>
        </ul>
      </div>
  </div>
</div>

        
  <div class="container">   
<div class="position-relative text-center ">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <form action="index.php" <?php $_SERVER['PHP_SELF']?> method="POST">
        <h3>الرجاء ادخال معلوماتك</h3>
        <div class="mb-3">
            <label for="firstName" class="form-label">الاسم الاول</label>
            <input type="text" name="firstname" class="form-control" id="firstName" value="<?php echo $firstName ?>" >
            <div class="form-text error"><?php echo $errors['firstNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="lastName" class="form-label">الاسم الثاني</label>
            <input type="text" name="lastname" class="form-control" id="lastName" value="<?php echo $lastName ?>">
            <div class="form-text error"><?php echo $errors['lastNameError'] ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">البريد الالكتروني</label>
            <input type="text" name="email" class="form-control" id="email" value="<?php echo $email ?>">
            <div class="form-text error"><?php echo $errors['emailError'] ?></div>
        </div>

        <button type="submit"  name="submit" class="btn btn-primary">ارسال البيانات</button>
        </form>
        </div>
        </div>


    </div>
</div>




<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button id="winner" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal">
     اختيار الرابح
    </button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="modalLabel">الرابح في المسابقة</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php foreach($users as $user): ?>
            <h1 class="display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) . '</br>' ?></h1>
        <?php endforeach; ?> 
      </div>
    </div>
  </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


    
    <?php include_once './parts/footer.php'; ?>