<?php $this->load->view('layout/header'); ?>
<div class="flex-container" style="display: flex; margin: 200px;">
    <!-- 사이드바 -->
    <div class="m-20">
        <?php $this->load->view('layout/sidebar'); ?>
    </div>
    <div class="content m-20" style="flex: 3;">
        <div class="flex flex-col w-full ">
            <div class="h-auto card bg-base-100">
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
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit nam inventore quibusdam deleniti rem porro, ab, repellat iure, aliquid excepturi sint. A doloribus maiores ratione blanditiis, assumenda excepturi vero qui.
                        Vel praesentium eius unde error voluptas quod hic, aspernatur quae dolorum iusto inventore maxime nisi ipsa vero. Aut fugiat illo voluptatem sapiente ea, ad dicta vero aperiam nobis laborum! Nobis!
                        Ipsum nulla praesentium veniam alias quas facilis quo repellendus itaque, adipisci corporis cumque beatae at. Vitae illum facilis et ullam quod aliquam eveniet similique, consectetur possimus necessitatibus qui, voluptates pariatur.
                        Architecto omnis fugiat quod esse aut possimus perspiciatis nobis. Vitae necessitatibus dolorem voluptas unde rerum incidunt? Soluta, magnam fugit! Quidem dolore molestiae veniam eaque quaerat voluptates ab ipsam vel voluptas.
                        Eaque molestias sequi delectus ad laudantium laboriosam dolore nulla, dolorem esse enim natus deleniti suscipit quisquam ea porro aspernatur commodi quam hic neque harum explicabo voluptatibus, blanditiis id facilis. Quod.
                        Architecto accusamus officiis nisi. Sint itaque voluptatibus sit ipsam placeat soluta provident quod ullam nemo commodi reprehenderit voluptas, natus maiores. Perspiciatis iste qui id temporibus, placeat fugiat officia obcaecati repellat!
                        Impedit deleniti ducimus similique nam magni ipsum dolor eius, enim voluptatem reprehenderit. Minus qui quas ipsa nisi corrupti minima quos ipsum libero maiores, perferendis ea velit delectus. Rerum, architecto sit.
                        Aperiam delectus libero facere vero ipsum sapiente officia at necessitatibus. Repudiandae dolore, minima harum ullam odit aspernatur deleniti quos voluptatum beatae. Illo facere unde ea molestias temporibus soluta sint voluptates.
                        Voluptates officia, tempore iste minus possimus rem explicabo. Iure voluptate magnam rerum cupiditate harum natus tenetur tempore atque accusantium quisquam eos nam sequi ipsa accusamus, ut expedita. Est, saepe excepturi?
                        Similique officia beatae aut. Harum voluptatibus, soluta, nobis eius et incidunt atque nostrum, quae qui molestiae animi ex minus repellendus nisi praesentium? Eos voluptatem modi quam eligendi dolorum quas nesciunt?
                        Odit iste, laudantium beatae accusantium voluptatibus obcaecati maxime quae omnis laborum cum optio tenetur pariatur culpa, velit nam minus aliquam! Tempora optio blanditiis delectus quam minus perspiciatis consequatur sapiente adipisci!
                        Id, voluptas cupiditate? Nisi adipisci commodi omnis deserunt consectetur nesciunt saepe aliquam laborum. Eius dolor rem saepe officia reiciendis facere eos? Consequuntur obcaecati nam, non odio quod et in blanditiis.
                        Explicabo optio minus odit fuga repellat tenetur velit modi. Veniam, qui, nulla odio repellendus fugit quidem autem dolores nemo libero iusto voluptatum magnam culpa quas ipsum id eligendi explicabo ut.
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
                            <button class="bg-gray-500 text-white w-28 h-12">답글쓰기</button>
                        </div>
                        <div class="">
                        <button class="bg-gray-500 text-white w-28 h-12">공유하기</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="stats shadow mt-4 bg-gray-100"> <!--랭킹바 -->
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <div class="stat-title">1위</div>
                    <div class="stat-value text-primary text-xl">admin</div>
                </div>
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             class="inline-block w-8 h-8 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div class="stat-title">2위</div>
                    <div class="stat-value text-secondary text-xl">tjdwls3144</div>
                </div>
                <div class="stat">
                    <div class="stat-title ">3위</div>
                    <div class="stat-value text-xl">starbuck</div>
                </div>
            </div>
        </div>
        <body class="mt-96">
        </body>
    </div>
</div>
