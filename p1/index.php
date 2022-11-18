<?php 
include './inc/db.php';
include './inc/form.php';
include './select/form.php';
include './db_close/form.php';
?>

<?php include_once './parts/header.php';?>




<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto">
      <img src="img/ii.png" alt="">
      <h1 class="display-4 fw-normal">اربح مع نور</h1>
      <p class="lead fw-normal">باقي على فتح التسجيل</p>
      <h3 id="countdown"></h3>
      <p class="lead fw-normal">للسحب على ربح نسخة مجانية من برنامج</p>
      </div>

      <div class="container">
        <h3>للدخول في السحب اتبع ما يلي</h3>
       <ul class="list-group list-group-flush">
      <li class="list-group-item">تابع البث المباشر على صفحتي على فيسوك بالتاريخ المذكور اعلاه</li>
      <li class="list-group-item">ساقوم ببث لمدة ساعة عبارة عن اسئلة واجوبة حرة للجميع</li>
      <li class="list-group-item">خلال فترة الساعة سيتم فتح صفحة التسجيل هنا حيث ستقوم بتسجيل اسمك وايميلك</li>
      <li class="list-group-item">بنهاية البث سيتم اختيار اسم واحد من قاعدة البيانات بشكل عشوائي</li>
      <li class="list-group-item">الرابح سيحصل على نسخة مجانية من برنامج كامتازيا</li>
    </ul>
    </div>
    </div>

  </div>



<div class="container">

<div class="position-relative  text-center ">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
    <form class="mt-5" action="<?php $_SERVER['PHP_SELF']?>" method="POST">
    <h3>الرجاء ادخل معلوماتك</h3>

  <div class="mb-3">
    <label for="firstName" class="form-label">الاسم الاول</label>
    <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $firstName   ?>">
    <div  class="form-text error"> <?php echo $errors['fristNameError'] ?></div>
  </div>

  <div class="mb-3">
    <label for="lastName" class="form-label">الاسم الاخير</label>
    <input type="text" name="lastName" class="form-control" id="lastName" value="<?php echo $lastName   ?>">
    <div  class="form-text error  "> <?php echo $errors['lastNameError'] ?> </div>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">البريد الاكتروني </label>
    <input type="text"  name="email" class="form-control" id="email" value="<?php echo $email   ?>">
    <div  class="form-text error"> <?php echo $errors['emailError'] ?></div>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>
</div>



<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
<button type="button" id="winner" class="btn btn-primary">
  اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modal">الرابح في المسابقة</h5>
      
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class="display-3 text-center modal-title" id="modal"><?php echo htmlspecialchars($user['firstName']) . ' ' . htmlspecialchars($user['lastName']) ?></h1>
        <?php endforeach; ?>     
       </div>
      
    </div>
  </div>



   <?php include_once './parts/footer.php';?>
