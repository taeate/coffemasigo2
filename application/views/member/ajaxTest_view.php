<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
function isValidEmail(email) {
    // 이메일 형식을 확인하는 정규식 사용
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return emailPattern.test(email) && email.length >= 12; // @ 포함 및 최소 길이 확인
}
$(document).ready(function() {

    $("#login").prop("disabled", true);

    var isNameAvailable = false;
    var isEmailAvailable = false;

  $("#checkName").click(function(event) { // 이벤트 객체를 전달받도록 수정
    event.preventDefault(); // 기본 동작 중지

    var name = $("#name").val();

    if (name.trim() === "") {
        $("#nameStatus_failed").text("이름을 입력해주세요");
        $("$nameStatus_success").text("");
    }
    if (name.length <= 2){
        $("#nameStatus_failed").text("이름은 2글자 이상이여야 합니다");
        $("$nameStatus_success").text("");
    }else{

    $.ajax({
            type: "POST",
            url: "member/ajaxTest/checkName",
            data: { name: name },
            success: function(response) {
                
                if (response === "unavailable") {
                    $("#nameStatus_failed").text("사용 불가능한 이름입니다");
                    $("#nameStatus_success").text(""); // Clear the success message
                    isNameAvailable = false;
                } else {
                    $("#nameStatus_success").text("사용 가능한 이름입니다");
                    $("#nameStatus_failed").text(""); // Clear the failed message
                    isNameAvailable = true;
                }
                if (isNameAvailable && isEmailAvailable) {
                $("#login").prop("disabled", false);
                }
            
            }
        });
    }
  
  });

  $("#checkEmail").click(function(event) { // 이벤트 객체를 전달받도록 수정
    event.preventDefault(); // 기본 동작 중지

    var email = $("#email").val();

    if (email.trim() === "") {
        $("#emailStatus_failed").text("이메일을 입력해주세요");
        $("#emailStatus_success").text("");

        
    }
    if( !isValidEmail(email)){
        $("#emailStatus_failed").text("올바른 이메일 주소를 입력해주세요");
        $("#emailStatus_success").text("");
    }else{

    $.ajax({
      type: "POST",
      url: "member/ajaxTest/checkEmail",
      data: { email: email },
      success: function(response) {
        if (response === "unavailable") {
            $("#emailStatus_failed").text("사용 불가능한 이메일 입니다");
            $("#emailStatus_success").text(""); // Clea
            isEmailAvailable = false;
        } else {
            $("#emailStatus_success").text("사용 가능한 이메일 입니다");
            $("#emailStatus_failed").text("");
            isEmailAvailable = true;
        }
        if (isNameAvailable && isEmailAvailable) {
            $("#login").prop("disabled", false);
          }
      }
    });
    
}
    
  });
 
});
</script>

<body>
    <br>
    <br>
    <div class="container ml-40">
    <?php foreach ($get_data as $row): ?>

    <?php $id = $row-> id; ?>
    <?php $name = $row-> name; ?>
    <?php $email = $row-> email; ?>
    <div class="">
    <?php echo "내 DB : ".$id.". ".$name.$email ?>
    <button class="btn btn-secondary ml-4">삭제</button><br>
    </div>
    
    <?php endforeach ?>
 
    
    <form action="" method="POST">
        <div>
            <div class="ml-4 mt-4">
                <label for="" class="text-lg">이름: </label>
                <input class="input input-bordered bg-gray-600 text-white" type="name" name="name" id="name">
                <button id="checkName" class="btn btn-primary">중복확인</button>
                <p id="nameStatus_success" class="text-green-500 ml-12 mt-2 mb-2"></p>
                <p id="nameStatus_failed" class="text-red-500 ml-12 mt-2 mb-2"></p>
            </div>
            <div>
                <label for="" class="text-lg">이메일: </label>
                <input class="input input-bordered bg-gray-600 text-white" type="email" name="email" id="email" required>
                <button id="checkEmail" class="btn btn-primary">중복확인</button>
                <p id="emailStatus_success" class="text-green-500 ml-16 mt-2 mb-2"></p>
                <p id="emailStatus_failed" class="text-red-500 ml-16 mt-2 mb-2"></p>
            </div>
       
    
        <button class="ml-24 btn btn-primary w-36" id="login" type="submit" name="submit">회원가입</button>
        </div>
    </form>
    </div>
    
</body>

</html>