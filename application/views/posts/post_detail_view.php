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
                            <div class="flex flex-none">
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
                        <button class="bg-gray-500 text-white w-16 h-8 mr-2">수정</button>
                        <button class="bg-gray-500 text-white w-16 h-8">삭제</button>
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
                            <div class="flex items-center justify-center text-sm ml-2">
                                총 3개
                            </div>
                        
                        </div>
                        <form class="ml-8 mr-8 mt-2">
                            <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                    <label for="comment" class="sr-only">Your comment</label>
                                    <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="댓글은 여기에 작성해주세요" required></textarea>
                                </div>
                                <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                    <button type="submit" class="inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                        작성
                                    </button>
                                    <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                        <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                                                </svg>
                                            <span class="sr-only">Attach file</span>
                                        </button>
                                        <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                                </svg>
                                            <span class="sr-only">Set location</span>
                                        </button>
                                        <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                                                </svg>
                                            <span class="sr-only">Upload image</span>
                                        </button>
                                    </div>
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
                    <div name="commnet-answer-area">
                            <div name="title" class="m-5">
                                
                                <div class="flex justify-normal">
                                    <div class="flex flex-none">
                                        <div class="text-base font-bold">tjdwls3144</div>    
                                        <div class="ml-4">2021-06-12 12:00</div>    
                                    </div>
                                    <div class="grow"></div>
                                </div>
                                <div class="flex">                                   
                                     <div class="mt-4">댓글입니다. ㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋㅋ</div>                                     
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


                    <div name="commnet-area" class="bg-base-200">
                        <div name="title" class="m-5 flex">
                            <div>
                                ┗
                            </div>
                            <div class="ml-2 flex-grow"> <!-- flex-grow를 사용하여 맨 오른쪽까지 확장 -->
                                <div class="flex justify-normal">
                                    <div class="flex flex-none">
                                        <div class="text-base font-bold">kakzzzz</div>    
                                        <div class="ml-4">2021-06-12 12:00</div>    
                                    </div>
                                    <div class="grow"></div>
                                </div>
                                <div class="flex mt-2">             
                                    <div class="">댓글쓰는곳인데 웃고만있네</div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex mt-2 text-sm">
                                        <div>
                                            댓글쓰기
                                        </div>
                                        <div>
                                        <a class="mt-4 ml-4 text-sm text-red-500">댓글보기</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex justify-end">
                                        <a class="mt-4 text-sm">수정하기</a>
                                        <a class="mt-4 ml-4 text-sm">삭제하기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div name="commnet-area" class="bg-base-200">
                        <div name="title" class="m-5 flex">
                            <div>
                                ┗
                            </div>
                            <div class="ml-2 flex-grow"> <!-- flex-grow를 사용하여 맨 오른쪽까지 확장 -->
                                <div class="flex justify-normal">
                                    <div class="flex flex-none">
                                        <div class="text-base font-bold">admin</div>    
                                        <div class="ml-4">2021-06-12 12:00</div>    
                                    </div>
                                    <div class="grow"></div>
                                </div>
                                <div class="flex mt-2">             
                                    <div class="">다 정지 시켜버린다?</div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="flex mt-2 text-sm">
                                        <div>
                                            댓글쓰기
                                        </div>
                                        <div>
                                        <a class="mt-4 ml-4 text-sm text-red-500">댓글보기</a>
                                        </div>
                                    </div>
                                    
                                    <div class="flex justify-end">
                                        <a class="mt-4 text-sm">수정하기</a>
                                        <a class="mt-4 ml-4 text-sm">삭제하기</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    


                </div>
                
            </div>
        </div>
        <body class="mt-96">
        </body>
    </div>
</div>
