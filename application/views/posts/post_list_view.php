<?php $this->load->view('layout/header'); ?>
<body class="mt-96">
    리스트 페이지입니다.
</body>
<?php var_dump($this->session->userdata()); ?>
<?php var_dump($this->session->userdata('user_id')); ?>

<?php if ($this->session->userdata('is_logged_in')): ?>
<p>환영합니다, <?php echo $this->session->userdata('user_id'); ?>님!</p>
<?php else: ?>
<p>로그인이 필요합니다.</p>
<?php endif; ?>