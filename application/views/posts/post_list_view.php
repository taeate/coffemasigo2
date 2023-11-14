<?php $this->load->view('layout/header'); ?>
<!-- <div class="relative">
        <img class="h-120 w-full fixed" src="/application/views/images/city.jpg" alt="">
    </div> -->
<div class="flex-container" style="display: flex; margin: 200px;">
   
    <!-- 사이드바 -->
    <div class="m-20">
        <?php $this->load->view('layout/sidebar'); ?>
    </div>
    
    <!-- 리스트 페이지 컨텐츠 -->
    <div class="content m-20" style="flex: 3;">
        <div class="flex flex-col w-full">
        <div class="grid h-40 card bg-base-300 rounded-box place-items-center">검색</div> 
        <!-- <div class="grid h-20 card bg-base-300 rounded-box place-items-center mt-4">랭킹</div> -->
        <div class="stats shadow mt-4 bg-gray-100"> <!--랭킹바 -->
  
            <div class="stat">
                <div class="stat-figure text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path></svg>
                </div>
                <div class="stat-title">1위</div>
                <div class="stat-value text-primary text-xl">admin</div>
                <!-- <div class="stat-desc">21% more than last month</div> -->
            </div>
            
            <div class="stat">
                <div class="stat-figure text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-8 h-8 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div class="stat-title">2위</div>
                <div class="stat-value text-secondary text-xl">tjdwls3144</div>
                <!-- <div class="stat-desc">21% more than last month</div> -->
            </div>
            
            <div class="stat">
                <div class="stat-title ">3위</div>
                <div class="stat-value text-xl">starbuck</div>

                <!-- <div class="stat-desc text-secondary">31 tasks remaining</div> -->
            </div>
            
        </div>
    </div>
        <body class="mt-96  bg-gray-400">
            <!-- 리스트 페이지의 내용 -->
                <div class="bg-base-100 mt-4">
                    <div class="overflow-x-auto shadow-md">
                            <table class="table">
                                <!-- head -->
                                
                                <?php foreach($get_list as $post): ?>
                                <tbody>
                                <!-- row 1 -->
                               
                                <tr class="border-b border-l border-r border-t hover:bg-gray-200 h-20"  onclick="window.location.href='/posts/free/<?=$post->post_id?>'">
            
                                    <th class="w-12" >
                                    <label>
                                        123
                                    </label>
                                    </th>
                                    <td>
                                    <div class="flex items-center gap-3">
                                        <div>
                                        <div class="font-bold"><?php echo $post->title; ?></div>
                                        <div class="text-sm opacity-50">자유</div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <div><?php echo $post->user_id; ?></div>
                                    </td>
                                        <td><?php echo $post->views; ?></td>
                                    <th>
                                        <div class="text-sm"><?php echo $post->create_date; ?></div>
                                    </th>
                    
                                </tr>
                               
                                <tr class="border-b border-l border-r border-t">
                                    <td>└</td>
                                   
                                    <td>
                                    <div class="flex items-center gap-3">
                                        
                                        <div>
                                        <div class="font-bold text-gray-400"><?php echo $post->title; ?> 에 대한 답변</div>
                                        <div class="font-bold mt-1">답변제목입니다.</div>
                                        </div>
                                    </div>
                                    </td>
                                    <td>
                                        <div>tjdwls3144</div>
                                    </td>
                                        <td>21</td>
                                    <th>
                                        <div class="text-sm">2020-10-31 01:32</div>
                                    </th>
                                </tr>
     
                               <!-- 끝 -->
                                </tr>
                                </tbody>
                                <!-- foot -->   
                            
                                <?php endforeach; ?>
                            </table>
                            <div class="mt-6 mb-6">
                                <div class="flex justify-center">
                                <button class="bg-gray-600 text-white w-20 h-8 rounded-lg mr-2">이전</button>
                                <button class="bg-gray-600 text-white w-20 h-8 rounded-lg ml-2">다음</button>
                                </div>
                                
                            </div>
                                
                            </div>
                        
                    </div>
               
            </div>
        </body>
    </div>
</div>
