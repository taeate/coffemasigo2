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
                    
                   
                    <?php if ($detail_info) : ?>
                        <?php $post_id = $detail_info->post_id; ?>
                        <?php $title = $detail_info->title; ?>
                        <?php $content = $detail_info->content; ?>
                        <?php $views = $detail_info->views; ?>
                        <?php $createdate = $detail_info->create_date; ?>
                        <?php $user_id = $detail_info->user_id; ?>

                        <div class="text-2xl ">
                            <?php echo $title ?><br>
                        </div>
                        <div class="flex justify-normal mb-4">
                            <div class="flex flex-none mt-4">
                                <div class="mt-4">자유</div>
                                <div class="mt-4 ml-8"> <?php echo $createdate ?></div>
                                <div class="mt-4 ml-8"><?php echo $user_id ?></div>
                            </div>
                            <div class="grow"></div>
                            <div class="flex flex-none">
                                <div class="mt-4">조회수: <?php echo $views ?></div>
                                <div class="mt-4 ml-8">댓글: 2</div>
                                <div class="mt-4 ml-8">조회수: 23</div>
                            </div>
                        </div>
                        
                    <?php endif ?>
                </div>
                <hr class="mr-12 ml-12">
                <div name="content " class="">
                    <div class="m-12">
                        
                        <?php echo $content ?>
                        
                       
                    </div>
                </div>
                <hr class="mr-12 ml-12">
                <div name="button-area" >
                    <div name="delete-update-btn" class="flex justify-end mr-12 mt-4">
                        <button class="bg-gray-500 text-white w-16 h-8 mr-2" onclick="window.location.href='/posts/edit/<?=$post_id?>'">수정</button>
                        <button class="bg-gray-500 text-white w-16 h-8" onclick="window.location.href='/posts/delete/<?=$post_id?>'">삭제</button>
                    </div>
                    <div name="like-btn" class="flex justify-center">
                        <button class="bg-gray-500 text-white w-28 h-12">추천</button>
                    </div>
                    
                    <div name="answer-btn" class="flex justify-between ml-12 mr-12 mt-4 mb-4">
                        <div class="">
                            <a href="/posts/write/answer_post/<?= $post_id ?>" class="btn bg-gray-500 text-white w-28 h-12">답글쓰기</a>
                        </div>
                        <div class="">
                        <button class="bg-gray-500 text-white w-28 h-12">공유하기</button>
                        </div>
                    </div>
                </div>
            </div>

               

            <div class="flex flex-col w-full mt-4 ">
                <div name="commnet-name"class="h-auto card bg-base-100">
                    <div class="bg-base-200 ">
                        <div class="flex ml-8 mt-4 text-lg">
                            <div class="">
                                댓글
                                
                            </div>
                            <!-- 해당 post_id 의 댓글의 개수표시 -->
                            <?php if(isset($comments_count)): ?>
                                <div class="flex items-center justify-center text-sm ml-2">
                                    총 <?php echo $comments_count; ?>개
                                </div>
                            <?php endif; ?>
                        
                        </div>
                        <form class="ml-8 mr-8 mt-2" method="post">
                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" name="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="댓글은 여기에 작성해주세요" required></textarea>
                                </div>
                                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                        작성
                                    </button>
                                   
                                </div>
                            </div>
                        </form>
                        
                        

                        <div class="flex ml-8 mb-4">
                            <a>
                                인기순
                            </a>
                            <a class="ml-2">
                                최신순
                            </a>
                        </div>
                    </div>
                         
                    
                    <?php foreach($comment_info as $comment) : ?>
                        <?php $user_id = $comment->user_id; ?>
                        <?php $content = $comment->comment_content; ?>
                        <?php $createdate = $comment->create_date; ?>
                
                    <div name="commnet-answer-area">
                            <div name="title" class="m-5">
                                
                                <div class="flex justify-normal">
                                    <div class="flex flex-none">
                                        <div class="text-base font-bold"><?php echo $user_id; ?></div>    
                                        <div class="ml-2"><?php echo $createdate; ?><br></div>    
                                    </div>
                                    <div class="grow"></div>
                                </div>
                                <div class="flex">                                   
                                     <div class="mt-4"><?php echo $content; ?><br></div>                                     
                                </div>
                                <div class="flex justify-between">
                                    <div class="mt-4 text-sm">댓글쓰기</div>
                                    <div class="mt-4 ml-4 text-sm">
                                        <a href="" class="text-red-500">댓글보기</a>
                                    </div>
                                    <div class="flex ml-auto">
                                        <a class="mt-4 text-sm">수정하기</a>
                                        <a class="mt-4 ml-4 text-sm">삭제하기</a>
                                    </div>
                                </div>

                            </div>
                            
                    </div>
                    <hr>


              
             <?php endforeach; ?>

                    


                </div>
                
            </div>
        </div>
        <body class="mt-96">
        </body>
    </div>
</div>
