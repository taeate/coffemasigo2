<?php $this->load->view('layout/header'); ?>
<div class="flex-container" style="display: flex; margin: 400px;">
    <!-- 사이드바 -->
    <div class="w-80">
        <?php $this->load->view('layout/sidebar'); ?>
    </div>
    <div class="content ml-8" style="flex: 3;">
        <div class="flex flex-col w-full ">
            <div class="h-auto bg-base-100">
                <div name="title" class="mt-8 ml-12 mr-12">
                    
               
                    <?php if ($post_data) : ?>
                        <?php $post_id = $post_data->post_id; ?>
                        <?php $title = $post_data->title; ?>
                        <div class="text-2xl ">
                               <?php echo $title ?> 에 대한 답변 글 작성
                        </div>
                       

                        <form method="POST" class="mt-4">
                            <div class="mb-6">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">제목</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">내용</label>
                                <textarea name="content" id="content" class="block w-full h-24 p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-24 bg-gray-800">작성</button>
                        </form>
                    <?php else: ?>
                        <div class="flex justify-normal mb-4">
                            <div class="flex flex-none">
                                <div class="mt-4 text-xl">게시글작성</div>
                     
                            </div>
                            <div class="grow"></div>
                            <div class="flex flex-none">
        
                                <div class="mt-4 ml-8">공지로등록</div>
                                <div class="mt-4 ml-8">전체공개</div>
                            </div>
                        </div>
                        <div>
                            채널선택
                        </div>

                        <form method="POST">
                            <div class="mb-6">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">제목</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            </div>
                            <div class="mb-6">
                                <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">내용</label>
                                <textarea name="content" id="content" class="block w-full h-24 p-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-md focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary w-24 bg-gray-800">작성</button>
                        </form>

                    <?php endif ?>

                </div>
                <hr class="mr-12 ml-12">
                <div name="content " class="">
                    <div class="m-12">
                        
                        
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit nam inventore quibusdam deleniti rem porro, ab, repellat iure, aliquid excepturi sint. A doloribus maiores ratione blanditiis, assumenda excepturi vero qui.
                        Vel praesentium eius unde error voluptas quod hic, aspernatur quae dolorum iusto inventore maxime nisi ipsa vero. Aut fugiat illo voluptatem sapiente ea, ad dicta vero aperiam nobis laborum! Nobis!
                        Ipsum nulla praesentium veniam alias quas facilis quo repellendus itaque, adipisci corporis cumque beatae at. Vitae illum facilis et ullam quod aliquam eveniet similique, consectetur possimus necessitatibus qui, voluptates pariatur.
                        Architecto omnis fugiat quod esse aut possimus perspiciatis nobis. Vitae necessitatibus dolorem voluptas unde rerum incidunt? Soluta, magnam fugit! Quidem dolore molestiae veniam eaque quaerat voluptates ab ipsam vel voluptas.
                       
                    </div>
                </div>
                <hr class="mr-12 ml-12">
                <div name="button-area" >
    
                    <div name="answer-btn" class="flex justify-between ml-12 mr-12 mt-4 mb-4">
                        <div class="">
                            <button class="bg-gray-500 text-white w-28 h-12">첨부파일</button>
                        </div>
                        <div class="">
                        <button class="bg-gray-500 text-white w-28 h-12">취소</button>
                        <button class="bg-gray-500 text-white w-28 h-12">작성완료</button>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
        <body class="mt-96">
        </body>
    </div>
</div>
