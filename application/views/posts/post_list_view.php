<?php $this->load->view('layout/header'); ?>
<body class="mt-96">
    리스트 페이지입니다.
</body>
<!-- <?php var_dump($this->session->userdata()); ?> -->


<?php if ($this->session->userdata('is_logged_in') === TRUE): ?>
    <?= $this->session->userdata('username'); ?>
    <?= $this->session->userdata('user_id'); ?>
<?php endif; ?>
