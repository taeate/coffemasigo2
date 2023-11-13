<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Masigo</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.9.4/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>
<nav class="flex fixed top-0 w-full">
<div class="navbar bg-gray-700 h-10">
    <div class="navbar-start">
        <div class="dropdown">
        <label tabindex="0" class="btn btn-ghost btn-circle">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" class="bg-white" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" /></svg>
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-white rounded-box w-52">
            <li><a>전체 글보기</a></li>
            <li><a>랭킹</a></li>
            <li><a>글작성</a></li>
        </ul>
        </div>
    </div>
    <div class="navbar-center">
        <a class="btn btn-ghost normal-case text-xl text-white">Cafe Masigo</a>
    </div>
    <div class="navbar-end">
    <div class="flex text-white">
    
        <?php if ($this->session->userdata('is_logged_in')): ?>
            <p>환영합니다, <?php echo $this->session->userdata('user_id'); ?>님!</p>
        <?php else: ?>
            <p>로그인이 필요합니다.</p>
        <?php endif; ?>
    


    </div>
    
        <div class="dropdown dropdown-bottom dropdown-end">
        
        <label tabindex="0" class="btn btn-ghost btn-circle avatar w-10 h-20 mr-4">
            <div class="w-500 rounded-full">
            <img src="/application/views/images/sho.jpg" />
            </div>
            
        </label>
        <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 x-[1] p-2 shadow bg-gray-700 text-white rounded-box w-52">
            <li><a>프로필 변경</a></li>
            <li><a>설정</a></li>
            <li><a>로그아웃</a></li>
        </ul>
        </div>
    
    </div>
    </div>
</nav>


